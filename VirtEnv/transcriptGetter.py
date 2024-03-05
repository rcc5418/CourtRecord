# 2021-03-03 ebb: I'm adapting a script for downloading videos
# from GeeksforGeeks.org: https://www.geeksforgeeks.org/downloading-files-web-using-python/
# ebb: Before beginning, go out to your shell (Git Bash or Terminal) and enter:
# pip install BeautifulSoup4
import bs4
import requests
import os

# ebb: This variable stores the website address that you want to scrape.
archive_url = "https://aceattorney.fandom.com/wiki/Category:Transcripts"

def get_files():
    # create response object
    r = requests.get(archive_url)

    # create beautiful-soup object
    soup = bs4.BeautifulSoup(r.content, 'html.parser')

    #getting all divs with this specific class (I think there's just one?)
    div = soup.find('div', class_='category-page__members')

    # Find all <a> elements within the div
    links = div.find_all('a', href=True)

    #The links in the text are relative, so I need to hand construct an absolute url for the reader.
    base_url = "https://aceattorney.fandom.com"

    #download each link from that div?
    for link in links:
        href = link['href']
        #Look ma, I'm building a url!
        absolute_url= base_url+href
        download_links(absolute_url)

    print("All transcripts downloaded!")

def download_links(href):
    # obtain filename by splitting url and getting last string
    # I'm saving these as HTML files since that's how Alyssa is working with her starter file.
    # This should be pretty easy to change if we want to!
    file_name = href.split('/')[-1] + ".html"
    print("Downloading file: " + file_name)

    # create response object
    r = requests.get(href, stream = True)

    workingDir = os.getcwd()
    print("current working directory: " + workingDir)
    fileDeposit = os.path.join(workingDir, 'corpus', file_name)
    print(fileDeposit)


    # download started
    with open(fileDeposit, 'wb') as f:
        for chunk in r.iter_content(chunk_size = 1024*1024):
            if chunk:
                f.write(chunk)
                print("Downloaded " + file_name)

    return

if __name__ == "__main__":

    # getting all links to files
    get_files = get_files()






