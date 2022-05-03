import enum


def scambia_righe(matrice):
    if len(matrice)%2:
        for k in range(1, len(matrice),2):
            matrice[k-1], matrice[k] = matrice[k], matrice[k-1]
    else:
        for k in range(1, len(matrice)-1,2):
            matrice[k-1], matrice[k] = matrice[k], matrice[k-1]

    print(matrice,"\n")


scambia_righe([[0,1,0,0,1],[1,0,1,0,1],[1,1,1,1,1]])

#############################################################################

'''Implementa la funzione diag, che data una matrice nxn come lista di liste, 
RITORNA una lista che contiene gli elementi della diagonale 
(da sinistra in alto fino all’angolo basso destro)'''

def diag(matrice):
    res = []
    for riga in range(len(matrice)):
        #for colonna in range(len(matrice[riga])):
        res.append(matrice[riga][riga])
    print(res,"\n")

    
matr = [[0,1,0,0,1],
        [1,0,1,0,1],
        [1,1,1,1,1],
        [1,1,1,1,1],
        [1,1,1,1,1]]
diag(matr)

#############################################################################

"""Data una stringa e un intero n, RITORNA una NUOVA matrice 
come lista di liste contenente tutte le lettere della stringa 
suddivise in righe da n elementi."""

def makematrix(stringa,n):
    stringa = stringa.lower()
    matrice = []
    support = []
    count, k = 0, 0
    for indice in range(len(stringa)):
        support.append(stringa[indice])
        if (len(support) == n):
            matrice.append(support)
            support = []
        elif (indice == len(stringa)-1):
            matrice.append(support)

    print(matrice)

makematrix("massimiliano",5)

#############################################################################

"""Dati due numeri interi n e m, con m multiplo di 3,
RITORNA una matrice n x m come lista di liste avente
nelle celle i numeri da 0 a 2 ripartiti in 3 fasce verticali."""

def bandiera(n, m):
    if (m % 3 != 0):
        raise Exception('Il valore m non é multiplo di 3')


bandiera(5,12)
expected = [[0, 0, 0, 0, 1, 1, 1, 1, 2, 2, 2, 2],
            [0, 0, 0, 0, 1, 1, 1, 1, 2, 2, 2, 2],
            [0, 0, 0, 0, 1, 1, 1, 1, 2, 2, 2, 2],
            [0, 0, 0, 0, 1, 1, 1, 1, 2, 2, 2, 2],
            [0, 0, 0, 0, 1, 1, 1, 1, 2, 2, 2, 2]]
    

#############################################################################

"""Prende una matrice come lista di liste in ingresso contenenti zeri e uni,
e RITORNA una NUOVA matrice (sempre come lista di liste), costruita prima 
invertendo tutte le righe della matrice di input e poi rovesciando tutte le righe"""

def flip(matrice):
    pass

#############################################################################

"""Dato un numero num restituire un dizionario che abbia:
-come chiavi gli interi da 0 alla parte intera di num
-come valori una tupla che contiene rispettivamente il quadrato ed il cubo della chiave"""

def dictnum(numero):
    pass