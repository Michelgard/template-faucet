-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 21 oct. 2017 à 16:40
-- Version du serveur :  5.5.55-0+deb8u1
-- Version de PHP :  7.0.20-1~dotdeb+8.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Base_Codel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_bin NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_bin NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `claims`
--

CREATE TABLE `claims` (
  `ID` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `valeur` int(11) NOT NULL,
  `wallet` varchar(255) COLLATE utf8_bin NOT NULL,
  `IP` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_agent` text COLLATE utf8_bin NOT NULL,
  `language` varchar(255) COLLATE utf8_bin NOT NULL,
  `success` tinyint(1) NOT NULL,
  `error` varchar(255) COLLATE utf8_bin NOT NULL,
  `referal` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `ip_banned`
--

CREATE TABLE `ip_banned` (
  `ID` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `IP` varchar(255) COLLATE utf8_bin NOT NULL,
  `ban` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `javascript`
--

CREATE TABLE `javascript` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Valeur` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `javascript`
--

INSERT INTO `javascript` (`ID`, `Nom`, `Valeur`) VALUES
(1, 'JS_before_close_head', ''),
(2, 'JS_before_open_boby', ''),
(3, 'JS_after_open_body', ''),
(4, 'JS_before_close_body', '');

-- --------------------------------------------------------

--
-- Structure de la table `monnaies`
--

CREATE TABLE `monnaies` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(5) COLLATE utf8_bin NOT NULL,
  `Nom_Complet` varchar(255) COLLATE utf8_bin NOT NULL,
  `Cent` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `monnaies`
--

INSERT INTO `monnaies` (`ID`, `Nom`, `Nom_Complet`, `Cent`) VALUES
(1, 'BTC', 'Bitcoin', 'Satoshi'),
(2, 'ETH', 'Ethereum', 'Satoshi'),
(3, 'LTC', 'Litecoin', 'Satoshi'),
(4, 'DOGE', 'Dogecoin', 'Satoshi'),
(5, 'BCH', 'Bitcoin Cash', 'Satoshi'),
(6, 'BLK', 'Blackcoin', 'Satoshi'),
(7, 'DASH', 'Dash', 'Satoshi'),
(8, 'PPC', 'Peercoin', 'Satoshi'),
(9, 'XPM', 'Primecoin', 'Satoshi');

-- --------------------------------------------------------

--
-- Structure de la table `param`
--

CREATE TABLE `param` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Valeur` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `param`
--

INSERT INTO `param` (`ID`, `Nom`, `Valeur`) VALUES
(1, 'param_nom_site', 'Name of the Faucet'),
(2, 'param_URL', 'http://domainFaucet.com'),
(3, 'param_API_faucethub', ''),
(4, 'param_temps', '5'),
(5, 'param_valeur', '20'),
(6, 'param_monnaie', 'BTC'),
(7, 'param_referal', '20'),
(8, 'param_email', 'email du Faucet'),
(9, 'param_solve_media_Challenge_Key', 'solve_media_Challenge_Key'),
(10, 'param_solve_media_Verification_Key', 'solve_media_Verification_Key'),
(11, 'param_solve_media_Authentication_Hash_Key', 'solve_media_Authentication_Hash_Key'),
(12, 'param_ip_serveur', 'Ip du serveur'),
(13, 'param_theme', 'Darkly'),
(14, 'param_solve_media_enable', '0'),
(15, 'param_geetest_enable', '0'),
(16, 'param_geetest_captcha_id', 'Captcha ID Geetest'),
(17, 'param_geetest_private_key', 'Private_key Geetest'),
(18, 'param_IPHub', 'Key API IPHub.info'),
(19, 'param_IPHub_enable', '0');

-- --------------------------------------------------------

--
-- Structure de la table `pub`
--

CREATE TABLE `pub` (
  `ID` int(11) NOT NULL,
  `Position` varchar(255) COLLATE utf8_bin NOT NULL,
  `Texte` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `pub`
--

INSERT INTO `pub` (`ID`, `Position`, `Texte`) VALUES
(1, 'pub_haut', '<img src=/assets/images/728X90.jpg alt=728X90 />'),
(2, 'pub_bas', '<img src=/assets/images/728X90.jpg alt=728X90 />'),
(3, 'pub_gauche', '<img src=/assets/images/160X600.jpg alt=160X600 />'),
(4, 'pub_droite', '<img src=/assets/images/160X600.jpg alt=160X600 />'),
(5, 'pub_centre1', '<img src=/assets/images/300X250.jpg alt=300X250/>'),
(6, 'pub_centre2', '<img src=/assets/images/300X250.jpg alt=300X250/>'),
(7, 'pub_centre3', '<img src=/assets/images/300X250.jpg alt=300X250/>'),
(8, 'pub_centre4', '<img src=/assets/images/300X250.jpg alt=300X250/>'),
(9, 'pub_claim1', '<img src=/assets/images/728X90.jpg alt=728X90 />'),
(10, 'pub_claim2', '<img src=/assets/images/468X60.jpg alt=468X60 />'),
(11, 'pub_claim3', '<img src=/assets/images/468X60.jpg alt=468X60 />'),
(12, 'pub_claim4', '<img src=/assets/images/728X90.jpg alt=728X90 />');

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

CREATE TABLE `texte` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Texte` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `texte`
--

INSERT INTO `texte` (`ID`, `Nom`, `Texte`) VALUES
(1, 'texte_bas_gauche', 'Excogitatum est super his, ut homines quidam ignoti, vilitate ipsa parum cavendi ad colligendos rumores per Antiochiae latera cuncta destinarentur relaturi quae audirent. hi peragranter et dissimulanter honoratorum circulis adsistendo pervadendoque divites domus egentium habitu quicquid noscere poterant vel audire latenter intromissi per posticas in regiam nuntiabant, id observantes conspiratione concordi, ut fingerent quaedam et cognita duplicarent in peius, laudes vero supprimerent Caesaris, quas invitis conpluribus formido malorum inpendentium exprimebat. '),
(2, 'texte_bas_centre', 'Constituendi autem sunt qui sint in amicitia fines et quasi termini diligendi. De quibus tres video sententias ferri, quarum nullam probo, unam, ut eodem modo erga amicum adfecti simus, quo erga nosmet ipsos, alteram, ut nostra in amicos benevolentia illorum erga nos benevolentiae pariter aequaliterque respondeat, tertiam, ut, quanti quisque se ipse facit, tanti fiat ab amicis. '),
(3, 'texte_bas_droite', 'Eodem tempore Serenianus ex duce, cuius ignavia populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.'),
(4, 'texte_centre_sup', 'Possible additional text for the user');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Wallet` varchar(255) COLLATE utf8_bin NOT NULL,
  `IP` varchar(255) COLLATE utf8_bin NOT NULL,
  `Balance` int(11) NOT NULL DEFAULT '0',
  `Next_claim` int(11) NOT NULL,
  `Creation_date` int(11) NOT NULL,
  `Last_login` int(11) NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT '1',
  `Captcha` int(11) NOT NULL DEFAULT '0',
  `Referal` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Index pour la table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `ip_banned`
--
ALTER TABLE `ip_banned`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `javascript`
--
ALTER TABLE `javascript`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `monnaies`
--
ALTER TABLE `monnaies`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `param`
--
ALTER TABLE `param`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `texte`
--
ALTER TABLE `texte`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT pour la table `claims`
--
ALTER TABLE `claims`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT pour la table `ip_banned`
--
ALTER TABLE `ip_banned`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT pour la table `javascript`
--
ALTER TABLE `javascript`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT pour la table `monnaies`
--
ALTER TABLE `monnaies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `param`
--
ALTER TABLE `param`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `pub`
--
ALTER TABLE `pub`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `texte`
--
ALTER TABLE `texte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
