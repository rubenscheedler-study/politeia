--
-- Database: `politeia`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `citizens`
--

CREATE TABLE IF NOT EXISTS `citizens` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL DEFAULT '1',
  `income` int(11) NOT NULL DEFAULT '1',
  `gender` int(11) NOT NULL DEFAULT '1',
  `is_married` tinyint(1) NOT NULL DEFAULT '0',
  `has_children` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `citizens`
--

INSERT INTO `citizens` (`id`, `age`, `income`, `gender`, `is_married`, `has_children`) VALUES
(1, 30, 30000, 1, 0, 1),
(2, 80, 30000, 1, 0, 1),
(3, 30, 30000, 1, 1, 0),
(4, 30, 30000, 1, 0, 1),
(5, 30, 30000, 1, 0, 1),
(6, 80, 30000, 1, 1, 1),
(7, 30, 30000, 1, 1, 1),
(8, 30, 30000, 1, 1, 0),
(9, 30, 30000, 1, 0, 1),
(10, 80, 30000, 1, 0, 1),
(11, 30, 30000, 1, 0, 1),
(12, 80, 30000, 1, 0, 1),
(13, 30, 30000, 1, 1, 1),
(14, 80, 30000, 1, 0, 1),
(15, 30, 30000, 1, 0, 1),
(16, 30, 30000, 1, 0, 1),
(17, 30, 30000, 1, 1, 1),
(18, 30, 30000, 1, 1, 1),
(19, 30, 30000, 1, 0, 1),
(20, 30, 30000, 1, 0, 0),
(21, 30, 30000, 1, 0, 1),
(22, 30, 30000, 1, 1, 1),
(23, 30, 30000, 1, 0, 1),
(24, 30, 30000, 1, 0, 1),
(25, 80, 30000, 1, 0, 1),
(26, 30, 30000, 1, 1, 1),
(27, 30, 30000, 1, 1, 0),
(28, 30, 30000, 1, 0, 1),
(29, 30, 30000, 1, 0, 1),
(30, 30, 30000, 1, 1, 0),
(31, 30, 30000, 1, 0, 1),
(32, 30, 30000, 1, 1, 1),
(33, 30, 30000, 1, 1, 1),
(34, 30, 30000, 1, 1, 0),
(35, 30, 30000, 1, 1, 0),
(36, 80, 30000, 1, 1, 0),
(37, 30, 30000, 1, 1, 0),
(38, 30, 30000, 1, 1, 1),
(39, 30, 30000, 1, 0, 0),
(40, 80, 30000, 1, 1, 1),
(41, 30, 30000, 1, 1, 1),
(42, 30, 30000, 1, 0, 1),
(43, 30, 30000, 1, 0, 1),
(44, 30, 30000, 1, 0, 0),
(45, 30, 30000, 1, 1, 1),
(46, 30, 30000, 1, 0, 1),
(47, 30, 30000, 1, 0, 1),
(48, 30, 30000, 1, 1, 0),
(49, 30, 30000, 1, 0, 1),
(50, 30, 30000, 1, 0, 0),
(51, 30, 30000, 1, 1, 0),
(52, 80, 30000, 1, 0, 1),
(53, 30, 30000, 1, 0, 1),
(54, 30, 30000, 1, 0, 1),
(55, 30, 30000, 1, 0, 1),
(56, 30, 30000, 1, 0, 1),
(57, 30, 30000, 1, 0, 1),
(58, 30, 30000, 1, 0, 1),
(59, 30, 30000, 1, 1, 0),
(60, 30, 30000, 1, 1, 0),
(61, 30, 30000, 1, 1, 1),
(62, 30, 30000, 1, 0, 1),
(63, 30, 30000, 1, 0, 0),
(64, 30, 30000, 1, 0, 1),
(65, 30, 30000, 1, 1, 0),
(66, 30, 30000, 1, 1, 1),
(67, 30, 30000, 1, 1, 1),
(68, 30, 30000, 1, 1, 1),
(69, 30, 30000, 1, 1, 1),
(70, 30, 30000, 1, 1, 0),
(71, 80, 30000, 1, 0, 0),
(72, 30, 30000, 1, 1, 0),
(73, 30, 30000, 1, 1, 1),
(74, 30, 30000, 1, 0, 1),
(75, 30, 30000, 1, 1, 1),
(76, 30, 30000, 1, 1, 0),
(77, 30, 30000, 1, 1, 0),
(78, 30, 30000, 1, 0, 1),
(79, 30, 30000, 1, 0, 1),
(80, 30, 30000, 1, 1, 1),
(81, 30, 30000, 1, 1, 1),
(82, 30, 30000, 1, 1, 1),
(83, 30, 30000, 1, 0, 1),
(84, 30, 30000, 1, 1, 0),
(85, 30, 30000, 1, 1, 1),
(86, 30, 30000, 1, 0, 1),
(87, 30, 30000, 1, 1, 0),
(88, 30, 30000, 1, 0, 0),
(89, 30, 30000, 1, 1, 1),
(90, 30, 30000, 1, 0, 0),
(91, 30, 30000, 1, 0, 0),
(92, 30, 30000, 1, 1, 0),
(93, 30, 30000, 1, 1, 1),
(94, 30, 30000, 1, 1, 1),
(95, 30, 30000, 1, 1, 1),
(96, 30, 30000, 1, 1, 1),
(97, 30, 30000, 1, 0, 1),
(98, 30, 30000, 1, 1, 1),
(99, 30, 30000, 1, 0, 0),
(100, 30, 30000, 1, 0, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `citizen_values`
--

CREATE TABLE IF NOT EXISTS `citizen_values` (
  `citizenId` int(11) NOT NULL,
  `valueId` int(11) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employee_functions`
--

CREATE TABLE IF NOT EXISTS `employee_functions` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `employee_functions`
--

INSERT INTO `employee_functions` (`id`, `name`) VALUES
(1, 'mannetje'),
(2, 'mediacontactpersoon'),
(3, 'campagneleider'),
(4, 'wettenbouwer'),
(5, 'regeringscriticus');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `parties`
--

CREATE TABLE IF NOT EXISTS `parties` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `parties`
--

INSERT INTO `parties` (`id`, `name`) VALUES
(1, 'D66'),
(2, 'FvD'),
(3, 'GroenLinks');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `party_values`
--

CREATE TABLE IF NOT EXISTS `party_values` (
  `party_id` int(11) NOT NULL DEFAULT '-1',
  `value_id` int(11) NOT NULL DEFAULT '-1',
  `score` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `party_values`
--

INSERT INTO `party_values` (`party_id`, `value_id`, `score`) VALUES
(1, 2, 30),
(1, 4, 30),
(1, 7, 40),
(2, 1, 40),
(2, 4, -50),
(2, 6, 50),
(2, 7, 60),
(3, 2, 70),
(3, 5, 50),
(3, 6, -20);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` char(100) NOT NULL,
  `party` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `party`) VALUES
(1, 'loru', 'oleole', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_citizen_values`
--

CREATE TABLE IF NOT EXISTS `user_citizen_values` (
  `user_id` int(11) NOT NULL,
  `citizen_id` int(11) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '50'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_employee_functions`
--

CREATE TABLE IF NOT EXISTS `user_employee_functions` (
  `user_id` int(11) NOT NULL DEFAULT '-1',
  `employee_id` int(11) NOT NULL,
  `function_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user_employee_functions`
--

INSERT INTO `user_employee_functions` (`user_id`, `employee_id`, `function_id`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `values`
--

CREATE TABLE IF NOT EXISTS `values` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `part_of` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `values`
--

INSERT INTO `values` (`id`, `name`, `part_of`) VALUES
(1, 'veilgheid', NULL),
(2, 'duurzaamheid', NULL),
(3, 'defensie', NULL),
(4, 'internationale samenwerking', NULL),
(5, 'solidariteit', NULL),
(6, 'vrijheid', NULL),
(7, 'onderwijs', NULL),
(8, 'werk', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `citizen_values`
--
ALTER TABLE `citizen_values`
  ADD PRIMARY KEY (`citizenId`,`valueId`), ADD KEY `Citizen_Values_fk1` (`valueId`);

--
-- Indexen voor tabel `employee_functions`
--
ALTER TABLE `employee_functions`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `party_values`
--
ALTER TABLE `party_values`
  ADD PRIMARY KEY (`party_id`,`value_id`), ADD KEY `Party_Values_fk1` (`value_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD KEY `Users_fk0` (`party`);

--
-- Indexen voor tabel `user_citizen_values`
--
ALTER TABLE `user_citizen_values`
  ADD PRIMARY KEY (`user_id`,`citizen_id`), ADD KEY `User_Citizen_Values_fk1` (`citizen_id`);

--
-- Indexen voor tabel `user_employee_functions`
--
ALTER TABLE `user_employee_functions`
  ADD PRIMARY KEY (`employee_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`), ADD KEY `Values_fk0` (`part_of`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `citizens`
--
ALTER TABLE `citizens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT voor een tabel `employee_functions`
--
ALTER TABLE `employee_functions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `parties`
--
ALTER TABLE `parties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `user_employee_functions`
--
ALTER TABLE `user_employee_functions`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `values`
--
ALTER TABLE `values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `citizen_values`
--
ALTER TABLE `citizen_values`
ADD CONSTRAINT `Citizen_Values_fk0` FOREIGN KEY (`citizenId`) REFERENCES `citizens` (`id`),
ADD CONSTRAINT `Citizen_Values_fk1` FOREIGN KEY (`valueId`) REFERENCES `values` (`id`);

--
-- Beperkingen voor tabel `party_values`
--
ALTER TABLE `party_values`
ADD CONSTRAINT `Party_Values_fk0` FOREIGN KEY (`party_id`) REFERENCES `parties` (`id`),
ADD CONSTRAINT `Party_Values_fk1` FOREIGN KEY (`value_id`) REFERENCES `values` (`id`);

--
-- Beperkingen voor tabel `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `Users_fk0` FOREIGN KEY (`party`) REFERENCES `parties` (`id`);

--
-- Beperkingen voor tabel `user_citizen_values`
--
ALTER TABLE `user_citizen_values`
ADD CONSTRAINT `User_Citizen_Values_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
ADD CONSTRAINT `User_Citizen_Values_fk1` FOREIGN KEY (`citizen_id`) REFERENCES `citizens` (`id`);

--
-- Beperkingen voor tabel `values`
--
ALTER TABLE `values`
ADD CONSTRAINT `Values_fk0` FOREIGN KEY (`part_of`) REFERENCES `values` (`id`);
