# Catalog-Online
# Acest proiect a fost creat intr-un weekend de catre mine, pentru a invata php.
Momentan este cam ... foarte basic, insa urmeaza update-uri permanente.
Fiind un proiect pentru invatare, o sa ii fie aduse imbunatatiri permanente. 
Printre urmatoarele update-uri se vor afla protectie sql injection, o baza de date mai complexa, si utilizarea react/angular, criptarea datelor sensibile (parola).
In versiunea finala se doreste ca elevul/profesorul sa isi poata accesa contul personal.
Profesorul va avea dreptul sa adauge/stearga/modifice profilul unui elev.
Elevul accesandusi contul va putea sa isi vada notele si situatia prezentei.
Toti elevii vor putea fi vizualizati in mod public, insa fara note personale sau situatia prezentei.
Se doreste Migrarea acestui proiect pe AWS si inlocuirea mysql cu DynamoDB.

# Prezentare
Momentan am ales sa utilizez o baza de date mysql destul de simpla deoarece obiectivul a fost sa invat ceva nou, nu ceea ce stiu deja.
DB este alcatuita din 2 tabele: elevi si profesori.
Structura elevi: Id, Nume, Prenume, Email, Telefon, Adresa, Data_Nastere, Informatica, Matematica, Clasa, Romana.
Structura profesori: Id, Nume, Prenume, email, telefon, Materie, Parola.

# Functionalitati:
Afisarea tuturor elevilor inregistrati.
Se pot adauga elevi noi.
Afisarea notele elevilor.
Stergerea unui elev.
Modificarea notelor unui elev.

