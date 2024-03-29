# !pip install saxonche
# !pip install pathlib

import os
import pathlib
from pathlib import Path
import spacy
import re as regex
from saxonche import PySaxonProcessor
from os import getcwd
#Use this instead for windows:
#w/ this: xq.set_query_base_uri(Path('.', 'foo.xml').absolute().as_uri())
from pathlib import Path
from collections import Counter
import matplotlib.pyplot as plt
import seaborn as sns

nlp = spacy.load('en_core_web_lg')

InputPath = 'AAcorpus-xml'
OutputPath = 'testOutput'

def readTextFiles(InputPath):
    # This function uses XPath to read the XML input
    for file in os.listdir(InputPath):
        if file.endswith('.xml'):
            filepath = f"{InputPath}/{file}"
            with PySaxonProcessor(license=False) as proc:
                xml = open(filepath, encoding='utf-8').read()
                xp = proc.new_xpath_processor()
                node = proc.parse_xml(xml_text=xml)
                xp.set_context(xdm_item=node)
                # xpath = xp.evaluate('//your/xpath/here')
                xpath = xp.evaluate('//line/@who => distinct-values()')
                count = xp.evaluate('//line/@who => distinct-values()')
                string = str(xpath)
                print(string)

def xqueryOverFiles(InputPath):
    # This function uses XQuery to search with XPath over many files in one collection
    with PySaxonProcessor(license=False) as proc:
        print(proc.version)
        xq = proc.new_xquery_processor()
        xq.set_query_base_uri(Path('.', 'foo.xml').absolute().as_uri()) #For Windows machines
        #XQuery comments are contained within (:  :)'s
        xq.set_query_content('''
        (: ebb: We're writing a query-based syntax called FLWOR (pronounced "flower") and every FLWOR requires a return statement at the end. :)
let $AceAtt := collection('AAcorpus-xml/?select=*.xml')
let $phoenixLines := $AceAtt//line[@speaker="Phoenix" or @speaker="Wright"]/text()
for $pt in $phoenixLines
    let $length := $pt ! string-length()
    where $length gt 300
        order by $length descending
        return $pt
''')

        r = xq.run_query_to_value() # You can use r = xq.run_query_to_string(), but I think the output looks way worse.
        #print(r)
        return r

output = str(xqueryOverFiles(InputPath))
#print(output)

phoenixLines = nlp(output)



phoenixLemmas = []
for token in phoenixLines:
    if token.pos_ == "PROPN":
        lemma = token.lemma_
        phoenixLemmas.append(lemma)

# Counter() finds out how frequently each verb lemma shows up in the entire verb list.
# Counter() removes duplicates and counts the number of times something appears.
# And it outputs a dictionary of key:value pairs already sorted from highest to lowest count.

lemmaFreq = Counter(phoenixLemmas)

print(f"Lemma frequency: \n {lemmaFreq}")

# We can even calculate the percentage each verb is used.
# The totalVerbCount will be the length of the BenderLemmas list.

totalPropNounCount = len(phoenixLemmas)
print(f'Total Proper Noun count: {totalPropNounCount}')
#For these lines in particular, spacy mis-identifies several nouns as proper nouns. Several capitalized words from the starts of sentences appear in the list...

mostCommon = dict(lemmaFreq.most_common()[:44])
print(f"Most common Lemmas: \n{mostCommon}")

counts = list(mostCommon.values())
lems = list(mostCommon.keys())
print(counts)
print(lems)

#I removed the code specifically for the Jupyter Notebook, everything seems to be working fine!
# Set figure size configuration
plt.figure(figsize=(20,20))
# Create bar plot using seaborn
sns.set(style="whitegrid")
sns.barplot(x=counts, y=lems, palette=sns.color_palette("husl", len(counts)), legend=False)
#I chose a pretty color group for the graph, though I admit it's not that good since it's circular...
# Adding labels and title
plt.xlabel('Frequency')
plt.ylabel('Proper Nouns')
plt.title('Most Common Proper Nouns from Phoenix Wright')
# Show plot
plt.show()

#I got this error when making the graph:
#C:\Users\Reece\OneDrive\Desktop\GitHub\DIGIT210\VirtEnv\XPath-XQuery\VisualizingNLP.py:102: FutureWarning:

#Passing `palette` without assigning `hue` is deprecated and will be removed in v0.14.0. Assign the `y` variable to `hue` and set `legend=False` for the same effect.

#  sns.barplot(x=counts, y=lems, palette=sns.color_palette("husl", len(counts)), legend=False)

#I tried to mess with my code to fix it, but nothing got rid of the error, so I'm still
#not sure what it means

