<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Lignes de langue de validation
    |--------------------------------------------------------------------------
    |
    | Les lignes de langue suivantes contiennent les messages d'erreur par défaut
    | utilisés par la classe de validation. Certaines de ces règles ont plusieurs
    | versions telles que les règles de taille. N'hésitez pas à modifier
    | chaque message ici.
    |
    */

    'accepted'             => 'Le :attribute doit être accepté.',
    'active_url'           => 'Le :attribute n\'est pas une URL valide.',
    'after'                => 'Le :attribute doit être une date après :date.',
    'after_or_equal'       => 'Le :attribute doit être une date après ou égale à :date.',
    'alpha'                => 'Le :attribute ne peut contenir que des lettres.',
    'alpha_dash'           => 'Le :attribute ne peut contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num'            => 'Le :attribute ne peut contenir que des lettres et des chiffres.',
    'array'                => 'Le :attribute doit être un tableau.',
    'before'               => 'Le :attribute doit être une date avant :date.',
    'before_or_equal'      => 'Le :attribute doit être une date avant ou égale à :date.',
    'between'              => [
        'numeric' => 'Le :attribute doit être entre :min et :max.',
        'file'    => 'Le :attribute doit être entre :min et :max kilo-octets.',
        'string'  => 'Le :attribute doit être entre :min et :max caractères.',
        'array'   => 'Le :attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'            => 'La confirmation de :attribute ne correspond pas.',
    'date'                 => 'Le :attribute n\'est pas une date valide.',
    'date_format'          => 'Le :attribute ne correspond pas au format :format.',
    'different'            => 'Le :attribute et :other doivent être différents.',
    'digits'               => 'Le :attribute doit être de :digits chiffres.',
    'digits_between'       => 'Le :attribute doit être entre :min et :max chiffres.',
    'dimensions'           => 'Le :attribute a des dimensions d\'image invalides.',
    'distinct'             => 'Le champ :attribute a une valeur en double.',
    'email'                => 'Le :attribute doit être une adresse e-mail valide.',
    'exists'               => 'Le :attribute sélectionné est invalide.',
    'file'                 => 'Le :attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute doit avoir une valeur.',
    'gt'                   => [
        'numeric' => 'Le :attribute doit être supérieur à :value.',
        'file'    => 'Le :attribute doit être supérieur à :value kilo-octets.',
        'string'  => 'Le :attribute doit être supérieur à :value caractères.',
        'array'   => 'Le :attribute doit avoir plus de :value éléments.',
    ],
    'gte'                  => [
        'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
        'file'    => 'Le :attribute doit être supérieur ou égal à :value kilo-octets.',
        'string'  => 'Le :attribute doit être supérieur ou égal à :value caractères.',
        'array'   => 'Le :attribute doit avoir :value éléments ou plus.',
    ],
    'image'                => 'Le :attribute doit être une image.',
    'in'                   => 'Le :attribute sélectionné est invalide.',
    'in_array'             => 'Le champ :attribute n\'existe pas dans :other.',
    'integer'              => 'Le :attribute doit être un entier.',
    'ip'                   => 'Le :attribute doit être une adresse IP valide.',
    'ipv4'                 => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6'                 => 'Le :attribute doit être une adresse IPv6 valide.',
    'json'                 => 'Le :attribute doit être une chaîne JSON valide.',
    'lt'                   => [
        'numeric' => 'Le :attribute doit être inférieur à :value.',
        'file'    => 'Le :attribute doit être inférieur à :value kilo-octets.',
        'string'  => 'Le :attribute doit être inférieur à :value caractères.',
        'array'   => 'Le :attribute doit avoir moins de :value éléments.',
    ],
    'lte'                  => [
        'numeric' => 'Le :attribute doit être inférieur ou égal à :value.',
        'file'    => 'Le :attribute doit être inférieur ou égal à :value kilo-octets.',
        'string'  => 'Le :attribute doit être inférieur ou égal à :value caractères.',
        'array'   => 'Le :attribute ne doit pas avoir plus de :value éléments.',
    ],
    'max'                  => [
        'numeric' => 'Le :attribute ne peut être supérieur à :max.',
        'file'    => 'Le :attribute ne peut être supérieur à :max kilo-octets.',
        'string'  => 'Le :attribute ne peut être supérieur à :max caractères.',
        'array'   => 'Le :attribute ne peut avoir plus de :max éléments.',
    ],
    'mimes'                => 'Le :attribute doit être un fichier de type : :values.',
    'mimetypes'            => 'Le :attribute doit être un fichier de type : :values.',
    'min'                  => [
        'numeric' => 'Le :attribute doit être au moins de :min.',
        'file'    => 'Le :attribute doit être au moins de :min kilo-octets.',
        'string'  => 'Le :attribute doit être au moins de :min caractères.',
        'array'   => 'Le :attribute doit avoir au moins :min éléments.',
    ],
    'not_in'               => 'Le :attribute sélectionné est invalide.',
    'not_regex'            => 'Le format du :attribute est invalide.',
    'numeric'              => 'Le :attribute doit être un nombre.',
    'present'              => 'Le champ :attribute doit être présent.',
    'regex'                => 'Le format du :attribute est invalide.',
    'required'             => 'Le champ :attribute est requis.',
    'required_if'          => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_unless'      => 'Le champ :attribute est requis sauf si :other est dans :values.',
    'required_with'        => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all'    => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_without'     => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsque aucun de :values n\'est présent.',
    'same'                 => 'Le :attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => 'Le :attribute doit être :size.',
        'file'    => 'Le :attribute doit être :size kilo-octets.',
        'string'  => 'Le :attribute doit être de :size caractères.',
        'array'   => 'Le :attribute doit contenir :size éléments.',
    ],
    'string'               => 'Le :attribute doit être une chaîne de caractères.',
    'timezone'             => 'Le :attribute doit être une zone valide.',
    'unique'               => 'Le :attribute a déjà été pris.',
    'uploaded'             => 'Le :attribute n\'a pas pu être téléchargé.',
    'url'                  => 'Le format du :attribute est invalide.',

    /*
    |--------------------------------------------------------------------------
    | Lignes de langue de validation personnalisées
    |--------------------------------------------------------------------------
    |
    | Ici, vous pouvez spécifier des messages de validation personnalisés pour les attributs
    | en utilisant la convention "attribute.rule" pour nommer les lignes. Cela permet de
    | spécifier rapidement une ligne de langue personnalisée pour une règle d'attribut donnée.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'message-personnalisé',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Attributs de validation personnalisés
    |--------------------------------------------------------------------------
    |
    | Les lignes de langue suivantes sont utilisées pour échanger des espaces réservés d'attributs
    | par quelque chose de plus lisible, comme l'Adresse E-Mail au lieu de "email".
    | Cela nous aide simplement à rendre les messages un peu plus clairs.
    |
    */

    'attributes' => [],

];
