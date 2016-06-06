---
layout: post
type: text
title: Remove Photoshop CC pslog.txt file
categories: [blog]
---

If you're like me, you like to keep your files organized, but since Photoshop doesn't care about you, it create a `pslog.txt` file in your home directory. And don't try to delete the file, because the next time you open Photoshop, that haunting thing will be there, looking at you with a “Nice try!” look in its eyes.

Luckily, with just two easy steps you can end this abomination:

1. Open **Terminal** located on `Applications/Utilities` folder;
2. Type the following: `chflags hidden ~/pslog.txt`

<em lang="fr">Voilà!</em>, that damn file disappears! If you're feeling kind of sado, you can bring it back by typing `chflags nohidden ~/pslog.txt` on **Terminal**.