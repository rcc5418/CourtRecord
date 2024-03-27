# Record for RegEx Exercise 5

I'll be converting all the Ace Attorney HTML transcripts into plain text!

First, we have some clearing up to do. The only place that the actual ingame text appears is in the \<div class="mw-parser-output"> element, so we can delete everything before that.

We also need to delete everthing *after* this div. A pattern we can discern  is that ever one of these div elements concludes with a multi-line comment, so we can find and delete everthing after that comment as well.
```
1)<!DOCTYPE html>.+?(<div class="mw-parser-output">) #Start with Dot Matches All ON
->
\1
```
```
2)<!--.+
->
*blank*
```
It has always been a testament of mine to work *smarter*, not harder, so I'm glad that my job was pretty simple. I can search for <.+?> to identify every single HTML element I need to delete! First, there are some specific Ace Attorney interjections I want to preserve that only show up in \<a> elements. We can add some plaintext with find/replaces like this:
```
"Holdit"#This will find the alt text for every Hold it! gif that appears
->
>Hold it!<#This will make it so that we have some plain text sandwiched between sets of < and >
#This'll kind of mangle out HTML, but we're going to strip away all the HTML elements next
```
Incidentially, there's a significant number of transcripts where this doesn't appear at all.
This is because the Hold It, Take That, and Objection cutins only appear in courtroom segments, which only make up about 1/2 of the game.
There's only a couple *iconic* speech bubble cut-ins, but there's way more than I thought. I found/replaced all the bubbles listed on this page: https://aceattorney.fandom.com/wiki/Speech_bubble
```
3)"Holdit"
->
>Hold it!<
```
```
4)"Objection"
->
>Objection!<
```
```
5)"Takethat"
->
>Take that!<
```
```
6)"Gotcha"
->
>Gotcha!<
```
Annoyingly, some games use a different naming conventions for the cut-ins as they appear in the transcript, so I had to do a little digging to find our what they were called.
```
7)"PWAADD Got it!"
->
>Got it!<
```
```
8)"EurekaDS"
->
>Eureka!<
```
```
8)"Hold it Ryunosuke"
->
>Hold it!<
```
```
9)"Objection Ryu English"

->
>Objection!<
```
```
10)"TGAA &#39;Scuse me!"
->
>'Scuse me!<
```
That covers almost everything used by the protaginists, but for fun, I captured the antagonist's special speech bubbles as well.

```
11)"NotsofastDS"
->
>Not so fast!<
```
One of the Ace Attorney games has never recieved official translation, but a fan-translation exists and is part of our transcripts. A certain character will say "Overruled" before making an arguement. For SOME reason, the text used as alt text for their cut-ins is this: "ZamvJ". Huh??
There's actually a bunch of bizarre choices for these texts. Hunting them down was a pain!
```
12)"ZamvJ"
->
>Overruled!<
```
```
13)"Shout tyotto.xi uk"
->
>Hang on!<
```
```
14)"Silence Official"
->
>Silence!<
```
```
15)"SoJ That&#39;s enough!"
->
>That's enough!<
```
```
16)"SoJ Satorha!"
->
>Satorha<
```
```
17)"SoJ Such insolence!"
->
>Such insolence!<
```
Having done that, The text from the cut-ins has been *mostly* preserved. Some examples I deemed to inconsequential to hunt for, but they're not too bad to find and replace.

Now we can cleanly remove all the HTML vestiges left in our code!
```
18)<.+?>
->
*blank*
```
Now there's a bunch of extra returns in our files, so let's clean them up a tad.
```
19)\R\R+
->
\R
```
This'll replace all series of two or more newlines with just one.

Lastly, we'll actually convert our .html files into .txt files, using this command in the folder:
```
for f in *.html; do mv $f `basename $f .html`.txt; done;
```

Lastly I used the TXTCollector program to combine all the text files into one mega-file, and finished by pruning this large text file a bit.
```
20 (On the combined.txt file)) c:\\users\\reece\\.+ #Dot Matches All turned off
->
*blank*
21)\R\R+
->
\R
```
Left in this folder is the original corpus of HTML files, the edited corpus-cp full of edited txt files, and the combined file, combined.txt with all the text of the series!
