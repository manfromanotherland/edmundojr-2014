---
layout: post
type: text
title: How to make TextEdit open new document by default
categories: [blog]
tags: [general, tips]
published: True
---

If you don't like TextEdit showing a file picker instead of a new blank file by default, just type the following line on Terminal:

```
defaults write -g NSShowAppCentricOpenPanelInsteadOfUntitledFile -bool false
```

That's it, now when you open TextEdit you can type right away! Another option would be to disable iCloud syncing documents and data system-wide. Just go to System Preferences » iCloud and uncheck the **Documents & Data** option.

<small>Source: [Ask Different](http://apple.stackexchange.com/questions/61406/how-to-make-textedit-open-with-a-blank-file-by-default)</small>