#!/usr/bin/env python3

from eAsistent import getNewToken
from os import environ

with open("mail.txt", "r") as mail:
      mail = str(mail.read()).replace("\n", "")

with open("koda.txt", "r") as koda:
      koda = str(koda.read()).replace("\n", "")


auth = getNewToken(mail, koda)
with open("auth.txt", "wb") as f:
      f.write(bytes("{}{}".format(auth[0], "\n"), "UTF-8"))
      f.write(bytes(auth[1], "UTF-8"))
