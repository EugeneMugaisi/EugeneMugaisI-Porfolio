#include<stdio.h>
#include<stdlib.h>
// #include<conio.h>

int main()
{
 float num1,num2;
  int sign;
  char choice;
  
  
    printf("\n\t Welcome to Calculator\n");
    
    printf("\n Enter your first number:");
    scanf("%f", &num1);
    
   printf("\n Enter your second number:");
   scanf("%f",&num2);
   rawr:
   printf("\n\n press 1 to add");
   printf("\n press 2 to subtract");
   printf("\n press 3 to divide");
   printf("\n press 4 to multiply\n");
   
   printf("\n enter a number:");
   
   scanf("%d", &sign);
   
   
   if(sign==1){
   printf("\n\nthe sum is %.2f",num1+num2);
   }
   
   if(sign==2){
   printf("\n\nthe difference is %.2f",num1-num2);
   }

   if(sign<1 || sign>4){
   printf("invalid input, please try again");
   goto rawr;
   }
} 
