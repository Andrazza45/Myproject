<?php
/**
 * Interfaccia per la gestione dei corsi
 * @author Enrico Zimuel (enrico.zimuel@its-ictpiemonte.it)
 */
declare(strict_types=1);

interface CorsiInterface
{
    public function getMediaCorsi(): float;
    public function addCorso(string $corso): bool;
    public function getCorsi(): array;
    public function addVoto(string $corso, int $voto): bool;
}


interface StudenteInterface
{
    public function setNome(string $nome): bool;
    public function getNome(): string;
    public function setCognome(string $cognome): bool;
    public function getCognome(): string;
    public function setEmail(string $email): bool;
    public function getEmail(): string;
    public function setDataDiNascita(int $giorno, int $mese, int $anno): bool;
    public function getDataDiNascita(): string; // nel formato "gg/mm/AAAA"
}



?>