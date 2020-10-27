#! /media/root/persistence/code/projet/python/env/bin/python

from googletrans import Translator
from config import lng
import sys

def core(): 
    inp=sys.argv[1:]
    temp2=''
    for l in inp:
        temp2+=str(l)+' '
    inp=temp2
    translator = Translator()
    trans=translator.translate(inp,src=lng.src,dest=lng.dest)
    print(trans.text)
n=1
while n:
    try:
        core()
        n=0
    except:
        n+=1
    if n>=2:
        break
