<?php
echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo "\n<p><address>#written and powered by twitter<a href='https://twitter.com/@overflowlife'>@overflowlife</a>.</address></p>";
