result = []
t = int(input())
for a in range(t):
    n = int(input())
    a = list(map(int, input().split()))
    odd, even = 0, 0
    for i in range(n):
        if i % 2 != a[i] % 2:
            if a[i] % 2 == 1:
                odd += 1
            else:
                even += 1
    if odd != even:
        result.append(-1)
    else:
        result.append(even)

for x in result:
    print(x) 


def num_cor(pala:str,tam:int):
    list_pala_in = ['w','m'];list_pala_out = ['uu','nn']
    aux_list = [0 for i in range(tam+1)]
    aux_list[0] = 1
    cont = 1
    while(cont < tam+1):
        if pala[cont -1 ] not in list_pala_in:
            aux_list[cont] = aux_list[cont-1]
            aux1 = (pala[cont-2:cont] == 'uu' or pala[cont-2:cont] == 'nn')
            if aux1 and cont > 1:
                aux_list[cont] = (aux_list[cont] + aux_list[cont-2]) % (pow(10,9) + 7)
        else:
            aux_list[cont] = 0
        cont = cont +1 
    return aux_list[tam]
 

pala = input().strip()
tam = len(pala)
print(num_cor(pala,tam))

<div>dfjd
<h1> dskafjiasjfi<h1></div>