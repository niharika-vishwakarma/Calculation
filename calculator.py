# Basic Calculator

def add(x,y):
    return x+y

def subt (x,y):
    return x-y

def mul(x,y):
    return x*y

def div(x,y):
    return x/y    

print("Enter values ")
x=int(input())
y=int(input())

choise= input("chose operator A / S / M / D \n")

if  choise in ("A" ,"S","M","D"):
    if choise =="A":
        print("Answer", add(x,y))

    if choise =="S":
        print("Answer", sub(x,y))

    if choise=="M":
        print("Answer", mul(x,y))

    if choise=="D":
        print("Answer", div(x,y))

else:
    print("chose correct operator")
