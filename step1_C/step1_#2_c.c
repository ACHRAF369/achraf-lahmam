#include <stdio.h>
#include <stdlib.h>

int main()
{
    int a,b;
    int somme,sous,prod,module;
    float quot;

    printf("veuillez saisir la valeur de a : \n");
    scanf("%d", &a);

    printf("veuillez saisir la valeur de b : \n");
    scanf("%d",&b);

    somme = a + b;
    sous = a - b;
    prod = a * b;
    module = a % b;
    quot = (float)a / b;

    printf("somme est %d\n", somme);
    printf("soustraction est %d\n", sous);
    printf("produit est %d\n", prod);
    printf("reste est %d\n", module);
    printf("quotien est %.2f", quot);

    return 0;
}
