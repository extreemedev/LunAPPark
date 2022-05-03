# 3AA quarta verifica -  VERSIONE B

# COMPLETARE IL CODICE IN BASE ALLE RICHIESTE SPECIFICATE NEI VARI PUNTI
# ATTENZIONE: NON CANCELLARE LE ISTRUZIONI DI PRINT GIA' PRESENTI

# LINEA DI SEPARAZIONE - NON CANCELLARE
print()
print('-------------- nome e data -------------------')

# PUNTO 1:  Creare e visualizzare una stringa con i seguenti dati: 
#           COGNOME - NOME - CLASSE - DATA - VERSIONE  
print("PUNTO 1 - dati studente:")
datistudente = "Alleva - Matteo - 5C - 20/04 - 2.0"
print(datistudente)



# LINEA DI SEPARAZIONE - NON CANCELLARE
print()
print('------------- prima parte - LISTE ANNIDATE ----------')
# ELENCO DI ALCUNI PIANETI (nome, gruppo, posizione): 
#       Venere      roccioso        interno
#       Giove       gassoso         esterno
#       Marte       roccioso        interno
#       Urano       gassoso         esterno 

# PUNTO 2:  creare una lista in cui ogni elemento è a sua volta una lista.
#           Ciascuna lista annidata contiene dati relativi ad un singolo pianeta




# PUNTO 3:  con apposito metodo, aggiungere alla lista del punto 2 
#           il seguente pianeta: Saturno - gassoso - esterno



# PUNTO 4:  visualizzare la lista creata come matrice (vedi output fornito)
print("PUNTO 4 - visualizza matrice:")




# PUNTO 5: visualizzare solo l'ultima colonna della matrice (relativa alla posizione del pianeta)
print("PUNTO 5 - ultima colonna matrice:")  






# LINEA DI SEPARAZIONE - NON CANCELLARE
print()
print('------------- seconda parte - LISTE --------------------------')

# Ogni pianeta può avere o meno dei satelliti.
# Per i pianeti considerati, il numero di satelliti e':
#           Venere      0  
#           Giove       79
#           Marte       2
#           Urano       27
#           Saturno     82

# PUNTO 6:  inserire nella matrice il rispettivo numero di satelliti



   
# PUNTO 7:  visualizzare la matrice dopo la modifica
print("PUNTO 7 - matrice con satelliti: ")






# LINEA DI SEPARAZIONE - NON CANCELLARE
print()
print('-------------- terza parte - DIZIONARI -------------------')    

# PUNTO 8:  tramite funzione dict(), crea un dizionario con questi dati:  
#           nome:Saturno, tipo:gassoso, satelliti: 82 




# PUNTO 9:  visualizza il dizionario
print("PUNTO 9 - visualizza dizionario creato con dict():")




# PUNTO 10: rimuovi la chiave "satelliti" e inserisci la nuova "nome_satelliti"
#           a cui corrisponde il dizionario con le seguenti voci:
#           a: Titano, b: Rea , c: Encelado




# PUNTO 11: visualizza il dizionario modificato come elenco VERTICALE di tuple 
print("PUNTO 11 - elenco verticale tuple:")




# PUNTO 12: accedi al dizionario per visualizzare l'elemento "Encelado"
print("PUNTO 12 - accedo a Encelado:")


# LINEA DI SEPARAZIONE - NON CANCELLARE
print()
print('-------------- quarta parte - SET ----------------') 
   
# Siano definiti i seguenti nomi di satelliti:
set_1 = {'Ganimede', 'Titano', 'Rea', 'Io','Encelado', 'Callisto','Luna' }
set_2 = {'Callisto','Luna','Europa','Tritone','Ariel','Dione','Teti'}

# PUNTO 13:  calcola e visualizza il numero totale di elementi (set 1 + set 2)
print("PUNTO 13 - Numero totale di elementi (set separati):")
print(str(len(set_1))+" e "+str(len(set_2)))


# PUNTO 14:  visualizza gli elementi in comune ai due insiemi
print("PUNTO 14 - Numero di elementi in comune:")
print(set_1.intersection(set_2))

# PUNTO 15:  visualizza gli elementi presenti solo in set_2
print("PUNTO 15 - Elementi presenti solo in set_2:")


# PUNTO 16:  unisci i due set e visualizza il numero totale di elementi 
print("PUNTO 15 - Numero totale di elementi (set uniti):")
set_3 = set_1.union(set_2)
print(len(set_3))
