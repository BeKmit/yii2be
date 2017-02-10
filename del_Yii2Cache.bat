@echo off
set dirName="frontend"
copy /Y %dirName%\web\assets\.gitignore d:\.gitignore%dirName%
rd /S/Q %dirName%\web\assets

set dirName="backend"
copy /Y %dirName%\web\assets\.gitignore d:\.gitignore%dirName%
rd /S/Q %dirName%\web\assets

TIMEOUT 3

if not exist %dirName%\web\assets mkdir %dirName%\web\assets
copy d:\.gitignore%dirName% %dirName%\web\assets\.gitignore
del /Q d:\.gitignore%dirName%

set dirName="frontend"
if not exist %dirName%\web\assets mkdir %dirName%\web\assets
copy d:\.gitignore%dirName% %dirName%\web\assets\.gitignore
del /Q d:\.gitignore%dirName%