#include <stdio.h>
#include <stdlib.h>
#include <sys/types.h>
#include <unistd.h>

int main( int argc, char* argv[])
{
        setuid(0);
        char cmd[64];
        sprintf(cmd, "kill %s", argv[1]);
        system( cmd );

        return 0;
}
