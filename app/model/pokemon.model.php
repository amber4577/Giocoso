<?php

require_once 'app/model/param.model.php';

function getPokemon(int $numPokemon, PDO $db): array
{
    $sql = "SELECT * FROM pokemon WHERE num_pokemon=:numPokemon ORDER BY num_forme ASC";
    $params = [
        'numPokemon' => [$numPokemon, PDO::PARAM_INT],
    ];
    return launchSimpleRequest($sql, $params, $db);
}


function getTypes(int $numPokemon, PDO $db): array
{
    $sql = "SELECT num_pokemon, num_forme, type_faiblesse.nom FROM
            (SELECT * FROM posseder_type WHERE (num_pokemon, num_forme) IN (
                SELECT num_pokemon, num_forme FROM Pokemon WHERE num_pokemon = :numPokemon
            )) NATURAL JOIN type_faiblesse;";
    $params = [
        'numPokemon' => [$numPokemon, PDO::PARAM_INT],
    ];
    return launchSimpleRequest($sql, $params, $db);
}


function existsPokemon(int $numPokemon, int $numForme, PDO $db) {
    $sql = "SELECT count(*) as nb_pokemon FROM pokemon 
            WHERE num_pokemon = :numPokemon AND num_forme = :numForme";
    $stmt = $db->prepare($sql);
    $stmt->bindParam('numPokemon', $numPokemon, PDO::PARAM_INT);
    $stmt->bindParam('numForme', $numForme, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result['nb_pokemon'] == 1;
}

function getWeaknesses(int $numPokemon, PDO $db): array
{
    $sql = "SELECT num_pokemon, num_forme, type_faiblesse.nom, degats FROM
            (SELECT * FROM posseder_faiblesse WHERE (num_pokemon, num_forme) IN (
                SELECT num_pokemon, num_forme FROM Pokemon WHERE num_pokemon = :numPokemon
            )) NATURAL JOIN type_faiblesse;";
    $params = [
        'numPokemon' => [$numPokemon, PDO::PARAM_INT],
    ];
    return launchSimpleRequest($sql, $params, $db);
}

function getTalents(int $numPokemon, PDO $db): array
{
    $sql = "SELECT num_pokemon, num_forme, talent.id_talent, nom, description FROM
    (
        SELECT * FROM posseder_talent WHERE (num_pokemon, num_forme) IN (
            SELECT num_pokemon, num_forme FROM Pokemon WHERE num_pokemon = :numPokemon
        )
    ) as temp_p
    LEFT JOIN talent ON temp_p.id_talent = talent.id_talent;";
    $params = [
        'numPokemon' => [$numPokemon, PDO::PARAM_INT],
    ];
    return launchSimpleRequest($sql, $params, $db);
}

function addNewPokemon(array $pokemon, PDO $db): bool
{
    try {
        $keys = array_keys($pokemon);
        $sql = "INSERT INTO pokemon (" . writeColumns($keys) .  ") VALUES (" . writeParametersList($keys) . ")";
        $stmt = $db->prepare($sql);
        foreach ($pokemon as $key => $item) {
            $stmt->bindValue($key, $item);
        }
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo $e;
        throw new Exception("Erreur lors de l'insertion du nouveau pokemon");
    }
}

function addTalentsToPokemon(int $numPokemon, int $numForme, array $talents, PDO $db): bool
{
    try {
        $sql = "INSERT INTO posseder_talent VALUES (:numPokemon, :numForme, :idTalent)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam('numPokemon', $numPokemon, PDO::PARAM_INT);
        $stmt->bindParam('numForme', $numForme, PDO::PARAM_INT);
        foreach ($talents as $idTalent) {
            $stmt->bindParam('idTalent', $idTalent, PDO::PARAM_INT);
            $stmt->execute();
        }
        return true;
    }catch (PDOException $e) {
        echo $e;
        throw new Exception("Erreur lors de l'insertion des talents pour le pokemon N°" . $numPokemon);
    }
}

function addTypesToPokemon(int $numPokemon, int $numForme, array $types, PDO $db): bool
{
    try {
        $sql = "INSERT INTO posseder_type VALUES (:numPokemon, :numForme, :idType)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam('numPokemon', $numPokemon, PDO::PARAM_INT);
        $stmt->bindParam('numForme', $numForme, PDO::PARAM_INT);
        foreach ($types as $idType) {
            $stmt->bindParam('idType', $idType, PDO::PARAM_INT);
            $stmt->execute();
        }
        return true;
    }catch (PDOException $e) {
        echo $e;
        throw new Exception("Erreur lors de l'insertion des types pour le pokemon N°" . $numPokemon);
    }
}

function addWeaknessesToPokemon(int $numPokemon, int $numForme, array $weaknesses, PDO $db): bool
{
    try {
        $sql = "INSERT INTO posseder_faiblesse VALUES (:numPokemon, :numForme, :idType, :damage)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam('numPokemon', $numPokemon, PDO::PARAM_INT);
        $stmt->bindParam('numForme', $numForme, PDO::PARAM_INT);
        foreach ($weaknesses as $idWeakness) {
            $stmt->bindParam('idType', $idWeakness['id'], PDO::PARAM_INT);
            $stmt->bindParam('damage', $idWeakness['damage'], PDO::PARAM_STR);
            $stmt->execute();
        }
        return true;
    }catch (PDOException $e) {
        echo $e;
        throw new Exception("Erreur lors de l'insertion des faiblesses pour le pokemon N°" . $numPokemon);
    }
}

function writeParametersList(array $keys): string
{
    $parameters = '';
    $nbKeys = count($keys);
    for ($i = 0; $i < $nbKeys; $i++) {
        $coma = ($i == $nbKeys - 1) ? '' : ', ';
        $parameters .= ':' . $keys[$i] . $coma;
    }
    return $parameters;
}

function writeColumns(array $keys): string
{
    $columns = '';
    $nbKeys = count($keys);
    for ($i = 0; $i < $nbKeys; $i++) {
        $coma = ($i == $nbKeys - 1) ? '' : ', ';
        $columns .= $keys[$i] . $coma;
    }
    return $columns;
}
