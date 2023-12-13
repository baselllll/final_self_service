@echo off
echo Starting batch script...

REM Add a timestamp to the log for reference
echo %date% %time% Starting batch script... >> debug.log

REM Run the Laravel scheduler
C:\php7.4\php.exe -f "C:\inetpub\wwwroot\sshr\artisan" schedule:run

REM Add a delay to allow time for the scheduler to run
timeout /t 30

REM Run the SendSmsJob
C:\php7.4\php.exe -f "C:\inetpub\wwwroot\sshr\artisan" queue:work --queue=default --sleep=3 --tries=3

REM Check if the command was successful
IF ERRORLEVEL 1 (
    echo An error occurred while running the command.
    echo %date% %time% An error occurred while running the command. >> debug.log
) ELSE (
    echo Command completed successfully.
    echo %date% %time% Command completed successfully. >> debug.log
)

rem Add a line to close the command prompt window
exit
