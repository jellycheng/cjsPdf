@echo off
rem set exe_dir=%~dp0php\php.exe
set exe_dir=D:\php-5.6.15\php.exe
if exist %exe_dir% (echo start server successful ...) else (echo start server fail...)
start http://127.0.0.1:9998/
if exist %exe_dir% %exe_dir% -S 127.0.0.1:9998 &
pause