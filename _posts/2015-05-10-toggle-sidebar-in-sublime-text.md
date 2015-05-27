---
layout: post
type: text
title: Toggle Sidebar in Sublime Text
categories: [blog]
tags: [sublime-text, general, tips]
published: True
---

The shortcut for toggle sidebar in Sublime Text wasn't working for me. Searching about it in the internets, I discovered that you've to press `command+k` and then `command+b`, they call it a _sequential shortcut_.

For me that's crazy behavior, but it's quite simple to change it: go to `Preferences » Key Bindings - User` and paste the following in your file:

```
// Toggle the Sidebar
{ "keys": ["super+k"], "command": "toggle_side_bar" },

// BONUS: Reveal current file on the sidebar tree
{ "keys": ["super+shift+r"], "command": "reveal_in_side_bar" },
```

That's it! Now when you press `command+k` it'll show or hide the sidebar. As a bonus, I added the shortcut `command+shift+r` to reveal the current file in the tree.

Note to Windows users: you must change `super` for `ctrl`.

Hope that helps. Happy coding!