#include <stdio.h>
#include <string.h>

int main( int argc, char *argv[] ){
    if( argc == 2 ){
        char *test = argv[1];
        //printf("%s\n", test);
        if( !strcmp (test,"cookie") ){
            printf("\n NOM!NOM!NOM \n");
            printf("\n YUMMYY! Thanks for the cookie! Here's the flagg!!\n");
            printf("\n flag{4rgum3nts_} \n");
	    printf("\n");
            // printf("The argument supplied is %s\n", argv[1]);
        }
	else{
            printf("I asked for a cookie! Not this.\n");
    	}
    }
    else if( argc > 2 ){
        printf("Too many arguments supplied.\n");
    }
    else{
        printf("One argument expected.\n");
    }
}
