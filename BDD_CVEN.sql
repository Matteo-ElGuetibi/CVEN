CREATE TABLE `Attribuer_Hebergement` (
  `Date_hebergement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Attribuer_Hebergement`
--

INSERT INTO `Attribuer_Hebergement` (`Date_hebergement`) VALUES
('2021-03-28'),
('2021-01-17'),
('2021-02-14'),
('2021-02-04'),
('2021-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `ID_utilisateur` int(11) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Mdp` varchar(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Administrateur` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`ID_utilisateur`, `Login`, `Mdp`, `Nom`, `Prenom`, `Administrateur`) VALUES
(1, '13525', 'ECB69KXG7QA', 'Olson', 'Tiger', 0),
(2, '35045', 'PTE42SGS6SL', 'Beach', 'Ryan', 0),
(3, '57473', 'UUY03WGP3EF', 'Alexander', 'Griffith', 0),
(4, '17718', 'HSO34GTE1YB', 'Stein', 'Cherokee', 0),
(5, '37061', 'HNM16LUH5ML', 'Conway', 'Yvette', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Hebergement_Restauration`
--

CREATE TABLE `Hebergement_Restauration` (
  `ID_hebergement` int(11) NOT NULL,
  `Type_hebergement` varchar(100) NOT NULL,
  `Emplacement` varchar(100) NOT NULL,
  `Etage` int(11) NOT NULL,
  `Commentaire` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Hebergement_Restauration`
--

INSERT INTO `Hebergement_Restauration` (`ID_hebergement`, `Type_hebergement`, `Emplacement`, `Etage`, `Commentaire`) VALUES
(1, 'chambres avec lit double', 'trielvh', 1, 'incroayfzg'),
(2, 'chambre simple', 'semper rutrum. Fusce', 1, 'genial'),
(3, 'chambrre avec balcon', 'semper rutrum. Fusce', 1, 'genial'),
(4, 'chambre simple', 'a ultricies adipiscing,', 1, 'gfrahatreh'),
(5, 'chambre avec lit double ', 'Sed et libero.', 3, 'gqggnulrfg');

-- --------------------------------------------------------

--
-- Table structure for table `Reservation`
--

CREATE TABLE `Reservation` (
  `ID_reservation` int(11) NOT NULL,
  `Date_Arrivee` date NOT NULL,
  `Date_Depart` date NOT NULL,
  `Nombre_Client` int(11) NOT NULL,
  `Restaurant` tinyint(1) NOT NULL,
  `Menage` tinyint(1) NOT NULL,
  `Etat_de_reservation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Reservation`
--

INSERT INTO `Reservation` (`ID_reservation`, `Date_Arrivee`, `Date_Depart`, `Nombre_Client`, `Restaurant`, `Menage`, `Etat_de_reservation`) VALUES
(1, '2021-01-12', '2021-05-09', 5, 1, 1, 0),
(2, '2021-02-05', '2021-05-15', 1, 0, 0, 1),
(3, '2021-03-26', '2021-05-06', 4, 1, 0, 1),
(4, '2021-01-14', '2021-05-11', 4, 0, 0, 0),
(5, '2021-02-26', '2021-05-07', 4, 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`ID_utilisateur`);

--
-- Indexes for table `Hebergement_Restauration`
--
ALTER TABLE `Hebergement_Restauration`
  ADD PRIMARY KEY (`ID_hebergement`);

--
-- Indexes for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`ID_reservation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `Client`
  MODIFY `ID_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Hebergement_Restauration`
--
ALTER TABLE `Hebergement_Restauration`
  MODIFY `ID_hebergement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `ID_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
