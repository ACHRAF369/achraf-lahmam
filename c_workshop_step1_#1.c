#include <stdio.h>
#include <stdlib.h>

int main()
{
int age;
char nom[10];
char prenom[10];
char sexe[10];
char numTel[10];
 printf("entrer voter nom : ");
 scanf("%s",&nom);
 printf ("entrer votre prenom: ");
 scanf("%s",&prenom);
 printf ("entrer votre age: ");
 scanf("%d",&age);
 printf(" vous ettes ?:");
 scanf("%s" ,&sexe);
 printf (" enter voter numero de tellefon:");
 scanf("%s \n" ,&numTel);

 printf(" votre nom et %s et votre prenom et %s voter age et %d voter numero de tell et %s et vous ettes %s" ,&nom ,&prenom ,&age ,&sexe ,&numTel);

    return 0;
}
