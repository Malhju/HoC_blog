INSERT INTO `categories` (`id`,`name`,`user_id`,  `created_at`, `updated_at`) VALUES
(1, 'pipi',1, NULL, NULL),
(2, 'caca',2, NULL, NULL);

INSERT INTO `comments` (`id`, `post_id`, `author`, `email`, `content`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 5, '3', 'hafidhou@hafidhou.fr', 'j\'aime çaaaaaa', 0, NULL, NULL),
(2, 3, '2', 'veroxy@veroxy.fr', 'Celui ci est le plus top', 0, NULL, NULL);

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `photo_id`, `category_id`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'La crotte propre', 'c\'est celle qui sort, que tu vois dans la cuvette mais pas sur le papier', 1, 2, 2, NULL, NULL, 0),
(2, 'La crotte fantôme ', 'c\'est celle que tu sens sortir, que tu vois sur le papier mais pas dans la cuvette.', 2, 3, 2, NULL, NULL, 0),
(3, 'La crotte du lendemain de soirée', 'c\'est le liquide jaune brun qui t\'éclabousse toute la cuvette et qui te brûle le cul.', 1, 4, 2, NULL, NULL, 0),
(4, 'Transarent', 'Vous buvez trop de liquides en tout genre.\r\nVous avez un problème au niveau du foie qui se remarque par une hépatite virale ou une cirrhose (nausées, vomissements et fièvre).\r\n', 2, 8, 1, NULL, NULL, 0),
(5, 'FLuo', 'Vous prenez des suppléments vitamniques en excès ou ils ne sont pas absorbés par votre corps.', 1, 10, 1, NULL, NULL, 0),
(6, 'uituytuik', 'krytdjfugbjkl', 2, 8, 3, '2018-07-19 15:41:18', '2018-07-19 15:41:18', 0);