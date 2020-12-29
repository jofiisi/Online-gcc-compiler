#!/bin/bash
export PATH=$PATH:/usr/bin
gcc ./cCompiler/test.c 2>&1
x86_64-w64-mingw32-gcc -o test.exe ./cCompiler/test.c 2>&1
./a.out 2>&1