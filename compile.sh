#!/bin/bash
export PATH=$PATH:/usr/bin
filename=$1 2>&1
gcc ./cCompiler/$filename.c 2>&1
x86_64-w64-mingw32-gcc -o $filename.exe ./cCompiler/$filename.c 2>&1
./$filename.out 2>&1s