CREATE DATABASE `property`;

CREATE TABLE `property` (
 `id` int NOT NULL AUTO_INCREMENT,
 `title` varchar(255) NOT NULL,
 `image` varchar(255) NOT NULL,
 `location` varchar(255) NOT NULL,
 `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
 `status` varchar(25) NOT NULL,
 `office_space` float NOT NULL,
 `is_active` tinyint(1) NOT NULL DEFAULT '1',
 `created_at` datetime NOT NULL,
 `updated_at` timestamp NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci


INSERT INTO `property` (`title`, `image`, `location`, `description`, `status`, `office_space`, `is_active`, `created_at`, `updated_at`) VALUES ('Biznes Park Bydgoszcz - Beta', 'images/biuro-biznes-park-bydgoszcz-beta.jpg', 'Bydgoszcz, Okole, Karszewskiego 1', 'With its BREEM-certified, ecological solution, Beta makes for a modern office space. Standard features of the buidings', 'Existing', '9756', '1', '2022-02-07 20:41:24', '2022-02-07 20:41:24');

INSERT INTO `property` (`title`, `image`, `location`, `description`, `status`, `office_space`, `is_active`, `created_at`, `updated_at`) VALUES ('IDEA Prezestrzan Biznesu', 'images/biuro-idea-przestrzen-biznesu.jpg', 'Bydgoszcz, Bydgoskich Przemyslowcow 6', 'IDEA Prezestrzan Biznesu is a retail office building offering in total approx. 23,000 square meters of space for lease', 'Existing', '4230', '1', '2022-02-07 20:41:24', '2022-02-07 20:41:24');

INSERT INTO `property` (`title`, `image`, `location`, `description`, `status`, `office_space`, `is_active`, `created_at`, `updated_at`) VALUES ('Immobile K3', 'images/biuro-immobile-k3.jpg', 'Bydgoszcz, plac Koscieleckich 3', 'IMMOBILE K3 offers 2100 sq m of modern office space The office building was completed in Q3 2015', 'Existing', '9756', '1', '2022-02-07 20:41:24', '2022-02-07 20:41:24');

INSERT INTO `property` (`title`, `image`, `location`, `description`, `status`, `office_space`, `is_active`, `created_at`, `updated_at`) VALUES ('Kościuszko Business Point', 'images/biuro-kosciuszko-business-point.jpg', 'Toruń, Jakubaske-mokre Kościuszko 73', 'Kościuszko business point is located in a modern A-class office building located at the odra riverfront with a beautiful view', 'Existing', '5978', '1', '2022-02-07 20:41:24', '2022-02-07 20:41:24');