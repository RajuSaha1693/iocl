@echo off
net use \\10.85.166.1 /user:GH-SERVER1\Administrator "gspl@123"
copy \\10.85.166.1\c$\gsplusers\diTrend\GHY.xls
echo on