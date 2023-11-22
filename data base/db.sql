-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2023 at 10:04 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_product_id` (`product_id`),
  KEY `cart_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(35, 12, 2, 1),
(36, 12, 2, 1),
(37, 12, 2, 1),
(41, 13, 3, 4),
(42, 14, 6, 1),
(43, 14, 6, 1),
(49, 18, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `no` int NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `no`, `message`) VALUES
(0, 'Sidra', 81449325, 'wow'),
(0, 'razan', 71099452, 'the best'),
(0, 'hailma', 81449325, 'amazing'),
(0, 'omar', 45356373, 'amazing');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_product_id` (`product_id`),
  KEY `orders_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(5, 12, 2, 1),
(6, 12, 3, 1),
(7, 12, 2, 1),
(8, 12, 2, 1),
(9, 12, 2, 1),
(10, 12, 2, 1),
(11, 12, 2, 1),
(12, 13, 2, 4),
(13, 13, 3, 2),
(15, 16, 3, 5),
(16, 18, 2, 4),
(17, 18, 2, 5),
(18, 18, 3, 2),
(19, 18, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'Chocolate cake', 'cc.jpg', 3),
(2, 'Vanilla Cake', 'vanilla cupcake.jpg', 4.5),
(3, 'Strawberry Croissant', 'cr st.jpg', 5.99),
(4, 'Chocolate Croissant', 'Chocalate croissant .jpg', 4),
(5, 'Pesto Sandwich', 'pesto sandwich.jpg', 10),
(6, ' Baguette Labneh', 'Baguette-Labneh-With-Tapenade.jpg', 9),
(7, 'Neapolitan Margherita Pizza', 'Neapolitan Margherita Pizza.jpg', 14),
(8, ' Zaatar manouche ', 'm.jpg', 1.5),
(9, 'Croissant with macadamia ', 'crrr.jpg', 8),
(10, 'Cheese Cake', 'cheesecake.jpg', 6),
(11, 'Blueberry Tart', 'buberrytart.jpg', 6),
(12, 'Macaron with Almond Nut', 'macaron.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int NOT NULL,
  `ingredients` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instructions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `ingredients`, `instructions`) VALUES
(1, '3 tablespoons olive oil#1 batch Pizza Dough, recipe follows#8 ounces sliced pepperoni, about 1/8 inch thick (look for smaller-size pepperoni sticks) #16 ounces brick cheese (or whole-milk mozzarella), cut into 1/2-inch cubes #Pizza sauce, store-bought or homemade, recipe follows#2 1/4 cups all-purpose flour#2 teaspoons kosher salt #1 teaspoon rapid rise yeast #1 teaspoon sugar#Olive oil, for oiling the bowl#1 tablespoon olive oil#2 teaspoons dried Italian seasoning #2 cloves garlic, minced #One 28-ounce can crushed tomatoes #2 teaspoons sugar#Kosher salt and freshly ground black pepper', 'Position an oven rack in the bottom of the oven and preheat to the highest temperature setting, 500 to 550 degrees F.#Pour the oil in a large, square metal cake pan (or, ideally, an authentic Detroit-style pizza pan). Put the Pizza Dough in the pan and gently stretch it out to fit so the dough reaches the corners. If the dough is being temperamental, set it aside for another 10 minutes to relax and try again.#Layer the pepperoni on the dough. Then lay the cheese cubes all over, especially around the perimeter up to the edge of the pan (this creates the coveted crispy cheese crust). Dollop the pizza sauce on top in 3 lines.#Bake in the ultra-hot oven until bubbly and golden and a crispy cheese crust has formed, 10 to 15 minutes. Using a fish spatula, loosen up the edges and place on a cutting board. Slice into squares and serve!#Put the flour, salt, yeast and sugar in a food processor with a metal blade attachment and pulse to combine. Add 1 cup warm water, then process until a ball forms, about 30 seconds (if a ball does not form, add a bit more flour). Process for another 30 seconds, then roll into a tight ball and place in a lightly oiled bowl. Proof in a warm spot until the dough doubles in size, about 2 hours.#Heat a small saucepot over medium heat and add the oil. Add the Italian seasoning and garlic and saute until fragrant; do not let the garlic burn. Add the tomatoes and sugar and season with salt and pepper. Bring to a simmer and simmer until concentrated, about 30 minutes. Set aside to cool.'),
(2, 'One 28-ounce can whole peeled tomatoes, preferably San Marzano, drained#Sea salt&nbsp;#\"00\" or all-purpose flour, for forming and cooking#9 ounces Katie\'s Pizza Dough, at room temperature, recipe follows (or from your local pizzeria)#2 ounces fresh mozzarella, torn into strips&nbsp;#2 large fresh basil leaves&nbsp;#.10 ounces fresh cake yeast#2 1/2 cups bottled spring water, at room temperature&nbsp;#.9 ounces sea salt&nbsp;#2 pounds \"00\" flour, plus more as needed&nbsp;(about 7 cups)', 'Set a pizza stone on the lower rack of the oven, remove the other racks, and preheat to 500 degrees F.#Using a food mill, grind the tomatoes into a bowl (or pulse in a food processor until coarsely pureed.) Season with sea salt and set aside.#Very lightly dust a work surface with some flour. Fill a medium bowl with flour and spread it out into a wide even layer. Drop the dough onto the flour in the bowl, and flip it over once in the bowl to lightly coat it. On the work surface, using your fingertips, press the dough all over to flatten it. Flip it over and press all over the surface again. Flip it one more time and repeat. Press the dough with your fingers repeatedly on one side with one hand, and with the other hand, slowly turn the dough clockwise on the work surface. Continue poking and rotating the dough to flatten and stretch the dough.#Pick the dough up and toss it back and forth between the palms of your hands until it begins to stretch, forms a rough disc, and gets thinner. Drape the dough over your hands, tuck your fingers in, and gently pull your knuckles toward the outer edge of the dough. Continue, rotating the dough as you go, until it is about 10 inches in diameter. Work slowly, allowing the weight of the dough itself to stretch and do not force it or it will tear and can make the crust too chewy.#Dust the work surface with a little more flour and set the crust back down. Press it with your fingers and pull it gently at the edges to even out the circle. Using a small ladle, evenly spread about 1/4 cup of the tomato sauce over the surface of the dough, leaving a 1/2-inch border around the edge. Scatter the mozzarella pieces from the center out, leaving space between the cheese. Tear the basil leaves in half and scatter the pieces over the pizza.#Lightly flour a pizza peel and set it on the work surface at the edge of the pizza crust closest to you. Run your fingers around the outside parameter of the crust to loosen any edges that might be stuck (and make sure the dough is not stuck to the counter anywhere in the center). Gently grab the dough at the 5 o\'clock and 7 o\'clock positions and in one, quick motion, pull the pizza onto the peel. Use your fingers to pull and straighten the crust until round.#Open the oven door. Set the front of the peel on the back edge of the pizza stone. Shake the peel very lightly to make sure the dough is not stuck and will slide. Holding the peel at a peel, shake it lightly a few times, and then pull the peel out in one swift motion to drop the pizza onto the hot stone. Immediately close the oven door and cook until the crust begins to char on the bottom and edges and cheese is melted and bubbly, 8 to 10 minutes.#Use the peel to remove the pizza; slide it onto a cutting board. Slice with a pizza wheel and serve immediately.#Put the yeast in a measuring cup and dissolve it in about 1/2 cup of the water. In a large bowl, dissolve the salt in the remaining water.#Add about 1/2 cup of the flour to the salt-water solution and add the yeast mixture. Use your fingers to mix well. Add the remaining flour and mix with your hands until it forms a dough. Transfer the dough to a floured countertop.#To knead the dough, grab the sides with your fingers and pull it up and over itself into the center. Using the balls of your hands, press the dough firmly in the center. Repeat, pulling the dough from the outer sides inward, Press it fast from the edge inwards. Working quickly will help prevent it from sticking. Continue kneading the dough until it is very smooth to the touch, and springs back when pressed, 15 to 20 minutes. Shape the dough into a ball, place it in a clean bowl, and cover with plastic wrap.#Let the dough rise for 2 hours, and then divide into four 9-ounce portions. Form the portions into balls. Cover the dough with a towel and let rise at room temperature for 6 hours.'),
(3, '12 ounces ground beef#1 tablespoon yellow mustard, plus more for serving#Kosher salt and freshly ground black pepper#All-purpose flour, for dusting#1 pound refrigerated pizza dough#1 tablespoon vegetable oil#2 teaspoons sesame seeds#2 cups shredded American cheese (about 8 ounces)1/4 whole dill pickle, sliced into thin rounds#1/4 small red onion, finely diced, then rinsed and drained#Ketchup, for serving#Shredded lettuce, for serving, optional', 'Place a baking stone or inverted large baking sheet on the lowest rack of the oven and preheat to 450 degrees F.#Cook the beef in a medium skillet over medium heat just until no longer pink, about 4 minutes. Using a slotted spoon, transfer the beef to paper towels to drain and let cool 5 minutes. Put the cooled beef in a bowl, stir in the mustard to coat and sprinkle with some salt and pepper.#Dust a sheet of parchment paper set on a pizza peel or inverted baking sheet with some flour. Stretch the pizza dough into a round (12 inches for thick or 14 inches for thinner) on the parchment and brush the edge of the round with the oil, then sprinkle it with the sesame seeds. Sprinkle 1 1/2 cups cheese evenly over the dough, leaving a 1/2-inch border. Top with the beef, then sprinkle the remaining 1/2 cup cheese over the beef.&nbsp;#Slide the pizza off the parchment onto the hot stone or baking sheet and bake until the crust is golden and the cheese is bubbling, about 15 minutes. Transfer to a cutting board, arrange the pickle slices evenly over the pizza then sprinkle with the onions. Drizzle mustard and ketchup over the pizza and serve while hot with shredded lettuce on the side.'),
(4, '350 grams water at 100 degrees F #15 grams sea salt #1/8 teaspoon instant yeast #500 grams 00 flour, preferably pizzeria-style, plus more for dusting#Olive oil, for the dough box or bowl#1 1/2 pounds Roma tomatoes (about 8), coarsely chopped#1 cup fresh cilantro leaves and tender stems, coarsely chopped (about 1/2 bunch), plus more leaves, for serving#2 cloves garlic, smashed#1 to 2 serrano chiles, coarsely chopped#1 packet sazon con culantro y achiote#1/2 small yellow onion, coarsely chopped#8 tablespoons refried beans#8 ounces Oaxacan cheese, divided into 1-ounce pieces (see Cook’s Note)#8 tablespoons Cotija#8 large eggs#2 avocados, diced#Lime wedges and hot sauce, for serving', 'For the dough: Combine the water and salt in a large bowl and stir to dissolve the salt. Add the yeast and stir until dissolved. Add the flour and use your hands to stir and knead gently until the dough just comes together and all the flour is incorporated, about 2 minutes. Cover and let rest for 20 minutes.#Lightly dust a work surface with flour and turn the dough out onto it. Knead the dough until a smooth ball forms, about 2 minutes. Transfer the dough to a lightly oiled dough box or bowl and cover with a tightly fitting lid. Let rise until slightly puffy, about 1 hour.#Transfer the dough to a lightly floured surface and divide it into eight 100-gram pieces. Form the pieces into compact balls and transfer to a lightly floured dough box or baking sheet; leave plenty of space between each ball for them to expand. Lightly flour the tops and cover the balls with a lid or plastic wrap. Let rise at room temperature until puffy, about 2 hours, then refrigerate for at least 8 hours and up to overnight.#For the pizzas: Two hours before cooking the pizzas, let the dough come to room temperature.#Meanwhile combine the tomatoes, cilantro, garlic, chiles, seasoning packet, onion and 1/2 cup water in a medium saucepan. Cover and bring to a boil over high heat. Cook until the tomatoes start to break down and soften, about 5 minutes. Uncover, reduce the heat to medium and continue to cook, stirring often, until everything is very soft, about 20 minutes more. Puree in a blender or with an immersion blender and set aside to cool (see Cook’s Note).#Preheat a pizza oven to about 600 degrees F. (Because the egg on top takes a while to cook, the oven should be on the cooler side.)#Lightly flour a pizza peel and stretch out a dough ball to about 8 inches in diameter. Sauce the round with 2 tablespoons of the tomato sauce and dollop all over with 1 tablespoon of the beans. Tear 1 ounce of the Oaxacan cheese into small chunks and top the pizza with it, then sprinkle with 1 tablespoon of the Cotija. Repeat with a second dough ball, stretching and topping it as above.#Transfer the 2 rounds to the oven and cook, rotating them as necessary, until the crusts are set and lightly golden and the cheese has mostly melted, about 3 minutes. Remove from the oven and using the back of a spoon, make a well about 3 inches wide in the middle of each pizza. Crack an egg into each and return to the coolest part of the oven (see Cook’s Note). Cook, rotating as needed, until the egg whites are just set and the yolks are still runny, about 6 minutes.#Remove from the oven and let sit for a minute; the eggs will continue to cook slightly. Top with the avocado and cilantro leaves. Serve with lime wedges and hot sauce. Repeat with the remaining pizzas.'),
(7, 'One 28-ounce can whole peeled tomatoes, preferably San Marzano, drained#Sea salt&nbsp;#\"00\" or all-purpose flour, for forming and cooking#9 ounces Katie\'s Pizza Dough, at room temperature, recipe follows (or from your local pizzeria)#2 ounces fresh mozzarella, torn into strips&nbsp;#2 large fresh basil leaves&nbsp;#.10 ounces fresh cake yeast#2 1/2 cups bottled spring water, at room temperature&nbsp;#.9 ounces sea salt&nbsp;#2 pounds \"00\" flour, plus more as needed&nbsp;(about 7 cups)', 'Set a pizza stone on the lower rack of the oven, remove the other racks, and preheat to 500 degrees F.#Using a food mill, grind the tomatoes into a bowl (or pulse in a food processor until coarsely pureed.) Season with sea salt and set aside.#Very lightly dust a work surface with some flour. Fill a medium bowl with flour and spread it out into a wide even layer. Drop the dough onto the flour in the bowl, and flip it over once in the bowl to lightly coat it. On the work surface, using your fingertips, press the dough all over to flatten it. Flip it over and press all over the surface again. Flip it one more time and repeat. Press the dough with your fingers repeatedly on one side with one hand, and with the other hand, slowly turn the dough clockwise on the work surface. Continue poking and rotating the dough to flatten and stretch the dough.#Pick the dough up and toss it back and forth between the palms of your hands until it begins to stretch, forms a rough disc, and gets thinner. Drape the dough over your hands, tuck your fingers in, and gently pull your knuckles toward the outer edge of the dough. Continue, rotating the dough as you go, until it is about 10 inches in diameter. Work slowly, allowing the weight of the dough itself to stretch and do not force it or it will tear and can make the crust too chewy.#Dust the work surface with a little more flour and set the crust back down. Press it with your fingers and pull it gently at the edges to even out the circle. Using a small ladle, evenly spread about 1/4 cup of the tomato sauce over the surface of the dough, leaving a 1/2-inch border around the edge. Scatter the mozzarella pieces from the center out, leaving space between the cheese. Tear the basil leaves in half and scatter the pieces over the pizza.#Lightly flour a pizza peel and set it on the work surface at the edge of the pizza crust closest to you. Run your fingers around the outside parameter of the crust to loosen any edges that might be stuck (and make sure the dough is not stuck to the counter anywhere in the center). Gently grab the dough at the 5 o\'clock and 7 o\'clock positions and in one, quick motion, pull the pizza onto the peel. Use your fingers to pull and straighten the crust until round.#Open the oven door. Set the front of the peel on the back edge of the pizza stone. Shake the peel very lightly to make sure the dough is not stuck and will slide. Holding the peel at a peel, shake it lightly a few times, and then pull the peel out in one swift motion to drop the pizza onto the hot stone. Immediately close the oven door and cook until the crust begins to char on the bottom and edges and cheese is melted and bubbly, 8 to 10 minutes.#Use the peel to remove the pizza; slide it onto a cutting board. Slice with a pizza wheel and serve immediately.#Put the yeast in a measuring cup and dissolve it in about 1/2 cup of the water. In a large bowl, dissolve the salt in the remaining water.#Add about 1/2 cup of the flour to the salt-water solution and add the yeast mixture. Use your fingers to mix well. Add the remaining flour and mix with your hands until it forms a dough. Transfer the dough to a floured countertop.#To knead the dough, grab the sides with your fingers and pull it up and over itself into the center. Using the balls of your hands, press the dough firmly in the center. Repeat, pulling the dough from the outer sides inward, Press it fast from the edge inwards. Working quickly will help prevent it from sticking. Continue kneading the dough until it is very smooth to the touch, and springs back when pressed, 15 to 20 minutes. Shape the dough into a ball, place it in a clean bowl, and cover with plastic wrap.#Let the dough rise for 2 hours, and then divide into four 9-ounce portions. Form the portions into balls. Cover the dough with a towel and let rise at room temperature for 6 hours.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'razan', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'baraa', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'lama', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'nada', '51d92be1c60d1db1d2e5e7a07da55b26'),
(7, 'mm', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'mi', '202cb962ac59075b964b07152d234b70'),
(9, 'kh', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'un', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'ahmad', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'ahmad', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'halima', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'halimaffff', '0f6091b8f37e87512b99ddf6ad173060'),
(15, 'resrvbjk', '19dd0941faebc1c2b7ca0f9445707612'),
(16, 'halimaffffdcc', '6094839e68a25d542b6df0f3fe5a36f7'),
(17, 'resrvbjkgfd', '13b551eaea0655eee78b2cb59615ef67'),
(18, 'halimaa', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_product_id` FOREIGN KEY (`id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
