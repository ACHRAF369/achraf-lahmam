#include <stdio.h>
#include <stdlib.h>

int main()
{
    char nom[12],prenom[12],sexe[7];
    int age,num;

    printf(" votre nom : \n");
    scanf("%s", &nom);

    printf(" votre prenom : \n");
    scanf("%s",&prenom);

    printf(" votre age : \n");
    scanf("%d",&age);

    printf("votre sexe: \n");
    scanf("%s",&sexe);

    printf("votre numero de telephone : \n");
    scanf("%d",&num);

    printf("nom : %s prenom : %s age : %d sexe : %s numero de telephone : %d", nom, prenom, age, sexe, num);


    return 0;
}
