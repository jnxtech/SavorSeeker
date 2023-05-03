-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 05:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ss`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `image` varchar(5000) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `ingredients` text DEFAULT NULL,
  `save_count` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `label`, `image`, `url`, `ingredients`, `save_count`) VALUES
(391, 19, 'Pasta Frittata Recipe', 'https://edamam-product-images.s3.amazonaws.com/web-img/5a5/5a5220b7a65c911a1480502ed0532b5c.jpg?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEFAaCXVzLWVhc3QtMSJHMEUCIQCXLcdgvd839ZNb0%2BvjhHM5muP67w5oEIuDGeuM3%2FnLsAIgarZ3CGlDbN8DmuYJz4nXuwjoZyLA0KSuZ5STbxfWty0quQUISRAAGgwxODcwMTcxNTA5ODYiDA%2FRqhnUR9yXsYriLSqWBUtqQDGOZsLxmFUdc58t2q1UEO5ZZ2f3ZEx4hJVIJeIDWeG5EiprgtsMtbXqvCk5pYXPsc46%2F3ZfF372ds%2B43sqg0kAOJNXY0PjWpn3xhCmXzbmeKERG61NrokQPxqOoovAm0WYVpGTl3UkztihPcdV4ctxZrQssXenFefZ77Djf8T411qedHuBvZGhrIk7g%2BHTGLK6K3rnq0e7LuyOQmUklShBOgEqwxk8ED%2F7lcT%2F%2F6lV%2FS8IfphAI9LLM7XweeB0q7yhD5p1AMi%2FFUf%2BJLlZec%2BF0x%2Bsyc45KkS9jZJyiMZ1FF%2B21KM8eBHeawKlfWFJFi9dMRacWpTkyw3TDQocq%2BNhOaxYshE23PqibK2msOiWqAhfGy3m0n6I2n537%2Bh2C4tfEkWRQQsb9%2FPSZ3NPdXf3pgYppFGIrsmP5%2B0fhihQRpsZoEurwZ7mEnjt1Zb1EEHNX%2FUSxq5jssKESwX9KsNBkKGPV4XWsEwACZsBcXobZ9WouSiDWbQWI2pq0WNaeAT7L2p5Av5J4GfEWc8H%2BXgPuxFr5zcrA8nwe7wCyBVrngEsqDFbQJ3eDwvuEhHjPJy0rVin4J4gMUkTe1of6dcTV8aqGMkvL%2B3%2FdjdqVKf%2FZ6A%2B%2BQ3nmnae0KMn8Diy6SuKkg3nZRMLr%2FBiQlk6kvoZa5U2H%2FKpzbGKIkPWO3yQZS0DTgHkfwDai8HmwX%2FT6xRdR29JUrQyhqsGbx4t%2FQj%2BDVx3iFCuxKy5Nea%2BBWOer3Nt0cRkJgXx7fBRnzl1DyUnM10rmf3gWlnWhcM6HjZNSxMyhLRnEF0dpVy0e9KdvjABnXmH40897rf7wJj1dKkecfU9PDNdzfBJ6jNx%2Fp%2B5qrI6a2IcAgaTF1lIqLXXOpN%2BwMIPa9aEGOrEBKDo8j6I%2FBjC%2BCFax1yUYY%2Bnaj4dg1bnIbAtyIfIzLMCWPYpGldlgTjJbcj9TL6u2RvdimVxBwqYesiAOhaN6WQvjR0C3TYNnEJhl3PNWU7yuElZ8t7NCy1acOCBVnZHkOUwRZwfCqCCBbVTs0JBReh33EZ5GK%2BqGDCkVN1a7yNupsIu7HdLdNCXG%2FzgmbBMi5QvrFnHG1tzcBxffSs7hrUQ8aMhPvm%2FOQ5pbqludG%2F6l&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20230417T170853Z&X-Amz-SignedHeaders=host&X-Amz-Expires=3600&X-Amz-Credential=ASIASXCYXIIFENIESYNP%2F20230417%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=78494868cb09b699606e483d50adb5c75b428d8bbf1fe12dc1c41f09ab6b5f06', 'http://www.foodrepublic.com/2012/01/21/pasta-frittata-recipe', '[{\"text\":\"2 cups leftover pasta\",\"quantity\":2,\"measure\":\"cup\",\"food\":\"pasta\",\"weight\":210,\"foodCategory\":\"grains\",\"foodId\":\"food_a8hs60uayl5icia1qe8qoba1kwp8\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/296\\/296ff2b02ef3822928c3c923e22c7d19.jpg\"},{\"text\":\"4 eggs beaten\",\"quantity\":4,\"measure\":\"<unit>\",\"food\":\"eggs\",\"weight\":172,\"foodCategory\":\"Eggs\",\"foodId\":\"food_bhpradua77pk16aipcvzeayg732r\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/a7e\\/a7ec7c337cb47c6550b3b118e357f077.jpg\"},{\"text\":\"2 tablespoons butter\",\"quantity\":2,\"measure\":\"tablespoon\",\"food\":\"butter\",\"weight\":28.4,\"foodCategory\":\"Dairy\",\"foodId\":\"food_awz3iefajbk1fwahq9logahmgltj\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/713\\/71397239b670d88c04faa8d05035cab4.jpg\"},{\"text\":\"1\\/2 cup whichever cheese the pasta called for\",\"quantity\":0.5,\"measure\":\"cup\",\"food\":\"pasta\",\"weight\":52.5,\"foodCategory\":\"grains\",\"foodId\":\"food_a8hs60uayl5icia1qe8qoba1kwp8\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/296\\/296ff2b02ef3822928c3c923e22c7d19.jpg\"}]', 1),
(392, 15, 'Curry-Crusted Fish', 'https://edamam-product-images.s3.amazonaws.com/web-img/5e3/5e367b107d760d0c0be9e409c0ab07dd.jpg?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEFAaCXVzLWVhc3QtMSJHMEUCIQCXLcdgvd839ZNb0%2BvjhHM5muP67w5oEIuDGeuM3%2FnLsAIgarZ3CGlDbN8DmuYJz4nXuwjoZyLA0KSuZ5STbxfWty0quQUISRAAGgwxODcwMTcxNTA5ODYiDA%2FRqhnUR9yXsYriLSqWBUtqQDGOZsLxmFUdc58t2q1UEO5ZZ2f3ZEx4hJVIJeIDWeG5EiprgtsMtbXqvCk5pYXPsc46%2F3ZfF372ds%2B43sqg0kAOJNXY0PjWpn3xhCmXzbmeKERG61NrokQPxqOoovAm0WYVpGTl3UkztihPcdV4ctxZrQssXenFefZ77Djf8T411qedHuBvZGhrIk7g%2BHTGLK6K3rnq0e7LuyOQmUklShBOgEqwxk8ED%2F7lcT%2F%2F6lV%2FS8IfphAI9LLM7XweeB0q7yhD5p1AMi%2FFUf%2BJLlZec%2BF0x%2Bsyc45KkS9jZJyiMZ1FF%2B21KM8eBHeawKlfWFJFi9dMRacWpTkyw3TDQocq%2BNhOaxYshE23PqibK2msOiWqAhfGy3m0n6I2n537%2Bh2C4tfEkWRQQsb9%2FPSZ3NPdXf3pgYppFGIrsmP5%2B0fhihQRpsZoEurwZ7mEnjt1Zb1EEHNX%2FUSxq5jssKESwX9KsNBkKGPV4XWsEwACZsBcXobZ9WouSiDWbQWI2pq0WNaeAT7L2p5Av5J4GfEWc8H%2BXgPuxFr5zcrA8nwe7wCyBVrngEsqDFbQJ3eDwvuEhHjPJy0rVin4J4gMUkTe1of6dcTV8aqGMkvL%2B3%2FdjdqVKf%2FZ6A%2B%2BQ3nmnae0KMn8Diy6SuKkg3nZRMLr%2FBiQlk6kvoZa5U2H%2FKpzbGKIkPWO3yQZS0DTgHkfwDai8HmwX%2FT6xRdR29JUrQyhqsGbx4t%2FQj%2BDVx3iFCuxKy5Nea%2BBWOer3Nt0cRkJgXx7fBRnzl1DyUnM10rmf3gWlnWhcM6HjZNSxMyhLRnEF0dpVy0e9KdvjABnXmH40897rf7wJj1dKkecfU9PDNdzfBJ6jNx%2Fp%2B5qrI6a2IcAgaTF1lIqLXXOpN%2BwMIPa9aEGOrEBKDo8j6I%2FBjC%2BCFax1yUYY%2Bnaj4dg1bnIbAtyIfIzLMCWPYpGldlgTjJbcj9TL6u2RvdimVxBwqYesiAOhaN6WQvjR0C3TYNnEJhl3PNWU7yuElZ8t7NCy1acOCBVnZHkOUwRZwfCqCCBbVTs0JBReh33EZ5GK%2BqGDCkVN1a7yNupsIu7HdLdNCXG%2FzgmbBMi5QvrFnHG1tzcBxffSs7hrUQ8aMhPvm%2FOQ5pbqludG%2F6l&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20230417T171021Z&X-Amz-SignedHeaders=host&X-Amz-Expires=3600&X-Amz-Credential=ASIASXCYXIIFENIESYNP%2F20230417%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=22b8faf3ea0b19dec14c37aee07284131d0979f5756744a7689d8b8456f77cd3', 'http://www.bbcgoodfood.com/recipes/4717/', '[{\"text\":\"3 slices bread , about 85g\\/3oz in total\",\"quantity\":3,\"measure\":\"slice\",\"food\":\"bread\",\"weight\":87,\"foodCategory\":\"bread, rolls and tortillas\",\"foodId\":\"food_a3049hmbqj5wstaeeb3udaz6uaqv\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/886\\/886960f6ce6ccec5b9163bacf2996853.jpg\"},{\"text\":\"1 lime\",\"quantity\":1,\"measure\":\"<unit>\",\"food\":\"lime\",\"weight\":67,\"foodCategory\":\"fruit\",\"foodId\":\"food_av58muyb8kg92fbk0g8g8aui5knv\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/48a\\/48a123c9576647c4ada6a41df5eeb22a.jpg\"},{\"text\":\"1.0 tbsp Korma curry paste\",\"quantity\":1,\"measure\":\"tablespoon\",\"food\":\"curry paste\",\"weight\":16,\"foodCategory\":\"condiments and sauces\",\"foodId\":\"food_aojdol2are6zg7af2nincbe87jot\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/b6a\\/b6a9ebae5850f42eca0253827603ef9c.jpg\"},{\"text\":\"4 thick white fish fillets\",\"quantity\":4,\"measure\":\"fillet\",\"food\":\"fish\",\"weight\":464,\"foodCategory\":\"seafood\",\"foodId\":\"food_ar6pjbvaxqtlqia7jewa4brld7p9\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/717\\/717cb400eb49626bb7c95cd29292cef4.jpg\"}]', 1),
(394, 20, 'Pasta alla Gricia Recipe', 'https://edamam-product-images.s3.amazonaws.com/web-img/bb5/bb5bad0cbcb94ad2ef0895d444f30291.jpg?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEFAaCXVzLWVhc3QtMSJHMEUCIQCXLcdgvd839ZNb0%2BvjhHM5muP67w5oEIuDGeuM3%2FnLsAIgarZ3CGlDbN8DmuYJz4nXuwjoZyLA0KSuZ5STbxfWty0quQUISRAAGgwxODcwMTcxNTA5ODYiDA%2FRqhnUR9yXsYriLSqWBUtqQDGOZsLxmFUdc58t2q1UEO5ZZ2f3ZEx4hJVIJeIDWeG5EiprgtsMtbXqvCk5pYXPsc46%2F3ZfF372ds%2B43sqg0kAOJNXY0PjWpn3xhCmXzbmeKERG61NrokQPxqOoovAm0WYVpGTl3UkztihPcdV4ctxZrQssXenFefZ77Djf8T411qedHuBvZGhrIk7g%2BHTGLK6K3rnq0e7LuyOQmUklShBOgEqwxk8ED%2F7lcT%2F%2F6lV%2FS8IfphAI9LLM7XweeB0q7yhD5p1AMi%2FFUf%2BJLlZec%2BF0x%2Bsyc45KkS9jZJyiMZ1FF%2B21KM8eBHeawKlfWFJFi9dMRacWpTkyw3TDQocq%2BNhOaxYshE23PqibK2msOiWqAhfGy3m0n6I2n537%2Bh2C4tfEkWRQQsb9%2FPSZ3NPdXf3pgYppFGIrsmP5%2B0fhihQRpsZoEurwZ7mEnjt1Zb1EEHNX%2FUSxq5jssKESwX9KsNBkKGPV4XWsEwACZsBcXobZ9WouSiDWbQWI2pq0WNaeAT7L2p5Av5J4GfEWc8H%2BXgPuxFr5zcrA8nwe7wCyBVrngEsqDFbQJ3eDwvuEhHjPJy0rVin4J4gMUkTe1of6dcTV8aqGMkvL%2B3%2FdjdqVKf%2FZ6A%2B%2BQ3nmnae0KMn8Diy6SuKkg3nZRMLr%2FBiQlk6kvoZa5U2H%2FKpzbGKIkPWO3yQZS0DTgHkfwDai8HmwX%2FT6xRdR29JUrQyhqsGbx4t%2FQj%2BDVx3iFCuxKy5Nea%2BBWOer3Nt0cRkJgXx7fBRnzl1DyUnM10rmf3gWlnWhcM6HjZNSxMyhLRnEF0dpVy0e9KdvjABnXmH40897rf7wJj1dKkecfU9PDNdzfBJ6jNx%2Fp%2B5qrI6a2IcAgaTF1lIqLXXOpN%2BwMIPa9aEGOrEBKDo8j6I%2FBjC%2BCFax1yUYY%2Bnaj4dg1bnIbAtyIfIzLMCWPYpGldlgTjJbcj9TL6u2RvdimVxBwqYesiAOhaN6WQvjR0C3TYNnEJhl3PNWU7yuElZ8t7NCy1acOCBVnZHkOUwRZwfCqCCBbVTs0JBReh33EZ5GK%2BqGDCkVN1a7yNupsIu7HdLdNCXG%2FzgmbBMi5QvrFnHG1tzcBxffSs7hrUQ8aMhPvm%2FOQ5pbqludG%2F6l&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20230417T172132Z&X-Amz-SignedHeaders=host&X-Amz-Expires=3600&X-Amz-Credential=ASIASXCYXIIFENIESYNP%2F20230417%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=826336278835ecd499759de3b01d8eda33dc3eb55268dcc0fc88647d7939c259', 'http://www.seriouseats.com/recipes/2009/02/seriously-italian-pasta-alla-gricia-recipe.html', '[{\"text\":\"1 1\\/2 to 2 ounces of guanciale\",\"quantity\":1.75,\"measure\":\"ounce\",\"food\":\"guanciale\",\"weight\":49.611665468750004,\"foodCategory\":\"cured meats\",\"foodId\":\"food_awg7b7obgxpr66bzz8xdsb1w992h\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/d42\\/d426884a125fa39a70d5a5d7217864ec.jpg\"},{\"text\":\"2 tablespoons of grated Pecorino Romano\",\"quantity\":2,\"measure\":\"tablespoon\",\"food\":\"Pecorino Romano\",\"weight\":16.499999999721034,\"foodCategory\":\"Cheese\",\"foodId\":\"food_bmxguz9abbdnfvbuklp2mbsrpt6b\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/71a\\/71a53d043eded9a8914415178a07f879.jpg\"},{\"text\":\"4 ounces of dried pasta\",\"quantity\":4,\"measure\":\"ounce\",\"food\":\"pasta\",\"weight\":113.3980925,\"foodCategory\":\"grains\",\"foodId\":\"food_a8hs60uayl5icia1qe8qoba1kwp8\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/296\\/296ff2b02ef3822928c3c923e22c7d19.jpg\"}]', 1),
(395, 20, 'Beef Tea', 'https://edamam-product-images.s3.amazonaws.com/web-img/ad3/ad35ae4c847dcd39bad104838007f84a.jpg?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEFAaCXVzLWVhc3QtMSJIMEYCIQCsZMYQGBpz4%2FEnguxNjvNds5KzetbyRSigU%2F2xwzu6AAIhAKBgQp%2BCKPIPz%2BMcSh9yuLwtnLCcmq%2FiPXrYxZj0TcbWKrkFCEkQABoMMTg3MDE3MTUwOTg2IgwEuCBDFqlwIfnWeGYqlgWM4r0B7pN9P2blk4AB6J9ZXZ8KRiHFzgxR%2Fqg%2FPhvDwZR8bAZn1iAIXaGDNijYYY95g%2FIyVFs7ph5mKT1c2c3OiEDGXMUdwPFj9jIKezN6UdAxMgVCT%2B9Vg2cF3QyoJ3rX6q%2FRFgs2OVyNaeDvDn4iNHWpGiWI2q4e%2FzQK92YibWMb68pF1WVSHtr9VVZj74DOZ2VRAAxRkhvZil6DTngS6P0NfzskH%2B3qRwcgUA1jfjwSszCBXCB2XU02bkSUoqZuKSxIx%2FBNOWwogKEVVRse6wGEYqe%2BNlB%2BV%2F3fO1SRZyF2TNt8gC%2FiX%2BIhAEucXKPBzM1pm%2F9e9lbO3IxnZZg0eVz0%2BxKrYMfpO5t171UYA0Yz370iMdS4s%2FxRAwcgVCZErLQxZnQCRJJjyMSTl0jRLMSP%2By3bUu4SCLY6InFj0XTZWcK4gFiP1taVstQra8Cjy8596zpHe0OqV4AkjvQlNEfvSnw2v8O%2BAN2G%2FKjW9ksd1D4hmyCdBmtDXYjqexG1PXEWm3Ytckz6Ii9xh9Ayke3Q1WfIGiSjk3izsZMeRO8MgjgYoIuBokb20JmODb1sWZJQVVS3PFSolqLvtZWTLxNcdu7fj9orMeE61ULB5LS3jxFx2SSd%2BtFOEGVLd7QfAWGlBBPFZi8ekC9gw0%2BPPTFkAPRFa5FWww%2BUc1CEMjGKTfWGNnlBMH3x%2F85a6KP21gyBnMNfBVbcyJ6%2FgsR79sXJY%2FUCP%2BMfPIjFBKY1y7Gupb9zfqeFeqiXG%2FXA6nkV7uOdFBMxjXRa6MmjAMIogxI5DIPqaL%2BBnz13XdIGnbit5dtqh2%2FYEEVQAolTw6VjcnUPBuvQvAHr1TvqHDhwERrAbDfmvXXgQd4zoHATtngOjtBBczClz%2FWhBjqwAeSIqxRAlGEEwKYUVe%2FkyxzP1hJjI8%2F%2BxlYTc4slG19z14YcyixaQuJNNHnuT%2FXSNiwrJy1eIbtUfRl96t%2FxdYLXGsWBxY2fBfrC%2Fw3caCyqh0XINjEEM%2FALAwX0zFaXYgWjGrBCUPk8B5KWFtLAqYNPiuhkPZYrQCeSEZ3%2Brod%2BMHIs71PJS52l3ezRGhFUWDMFC2zQF988jF3kztrcfIvGeVkNlINRwKXb%2FUVpGNki&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20230417T172242Z&X-Amz-SignedHeaders=host&X-Amz-Expires=3600&X-Amz-Credential=ASIASXCYXIIFFGNM2ZGO%2F20230417%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=e208a1aa2d8a7aef59c9b1268f082e754c7db5981c3412b81b1603f150089c1a', 'https://www.epicurious.com/recipes/food/views/beef-tea-395253', '[{\"text\":\"8 ounces beef chuck steak, cut into 1\\/2-inch cubes\",\"quantity\":8,\"measure\":\"ounce\",\"food\":\"chuck steak\",\"weight\":226.796185,\"foodCategory\":\"meats\",\"foodId\":\"food_bd2spt5bdl3k04bvjq3j3botp4r6\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/e53\\/e53f909f06b1a44972b9492a7604beee.jpg\"},{\"text\":\"1\\/4 teaspoon salt\",\"quantity\":0.25,\"measure\":\"teaspoon\",\"food\":\"salt\",\"weight\":1.5,\"foodCategory\":\"Condiments and sauces\",\"foodId\":\"food_btxz81db72hwbra2pncvebzzzum9\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/694\\/6943ea510918c6025795e8dc6e6eaaeb.jpg\"},{\"text\":\"3 cups water\",\"quantity\":3,\"measure\":\"cup\",\"food\":\"water\",\"weight\":711,\"foodCategory\":\"water\",\"foodId\":\"food_a99vzubbk1ayrsad318rvbzr3dh0\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/5dd\\/5dd9d1361847b2ca53c4b19a8f92627e.jpg\"}]', 1),
(396, 20, 'Beef Tacos', 'https://edamam-product-images.s3.amazonaws.com/web-img/219/219b9268b0f84eecf0cab133498b7ef3.jpg?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEFAaCXVzLWVhc3QtMSJIMEYCIQCsZMYQGBpz4%2FEnguxNjvNds5KzetbyRSigU%2F2xwzu6AAIhAKBgQp%2BCKPIPz%2BMcSh9yuLwtnLCcmq%2FiPXrYxZj0TcbWKrkFCEkQABoMMTg3MDE3MTUwOTg2IgwEuCBDFqlwIfnWeGYqlgWM4r0B7pN9P2blk4AB6J9ZXZ8KRiHFzgxR%2Fqg%2FPhvDwZR8bAZn1iAIXaGDNijYYY95g%2FIyVFs7ph5mKT1c2c3OiEDGXMUdwPFj9jIKezN6UdAxMgVCT%2B9Vg2cF3QyoJ3rX6q%2FRFgs2OVyNaeDvDn4iNHWpGiWI2q4e%2FzQK92YibWMb68pF1WVSHtr9VVZj74DOZ2VRAAxRkhvZil6DTngS6P0NfzskH%2B3qRwcgUA1jfjwSszCBXCB2XU02bkSUoqZuKSxIx%2FBNOWwogKEVVRse6wGEYqe%2BNlB%2BV%2F3fO1SRZyF2TNt8gC%2FiX%2BIhAEucXKPBzM1pm%2F9e9lbO3IxnZZg0eVz0%2BxKrYMfpO5t171UYA0Yz370iMdS4s%2FxRAwcgVCZErLQxZnQCRJJjyMSTl0jRLMSP%2By3bUu4SCLY6InFj0XTZWcK4gFiP1taVstQra8Cjy8596zpHe0OqV4AkjvQlNEfvSnw2v8O%2BAN2G%2FKjW9ksd1D4hmyCdBmtDXYjqexG1PXEWm3Ytckz6Ii9xh9Ayke3Q1WfIGiSjk3izsZMeRO8MgjgYoIuBokb20JmODb1sWZJQVVS3PFSolqLvtZWTLxNcdu7fj9orMeE61ULB5LS3jxFx2SSd%2BtFOEGVLd7QfAWGlBBPFZi8ekC9gw0%2BPPTFkAPRFa5FWww%2BUc1CEMjGKTfWGNnlBMH3x%2F85a6KP21gyBnMNfBVbcyJ6%2FgsR79sXJY%2FUCP%2BMfPIjFBKY1y7Gupb9zfqeFeqiXG%2FXA6nkV7uOdFBMxjXRa6MmjAMIogxI5DIPqaL%2BBnz13XdIGnbit5dtqh2%2FYEEVQAolTw6VjcnUPBuvQvAHr1TvqHDhwERrAbDfmvXXgQd4zoHATtngOjtBBczClz%2FWhBjqwAeSIqxRAlGEEwKYUVe%2FkyxzP1hJjI8%2F%2BxlYTc4slG19z14YcyixaQuJNNHnuT%2FXSNiwrJy1eIbtUfRl96t%2FxdYLXGsWBxY2fBfrC%2Fw3caCyqh0XINjEEM%2FALAwX0zFaXYgWjGrBCUPk8B5KWFtLAqYNPiuhkPZYrQCeSEZ3%2Brod%2BMHIs71PJS52l3ezRGhFUWDMFC2zQF988jF3kztrcfIvGeVkNlINRwKXb%2FUVpGNki&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20230417T172242Z&X-Amz-SignedHeaders=host&X-Amz-Expires=3600&X-Amz-Credential=ASIASXCYXIIFFGNM2ZGO%2F20230417%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=2687c37ede346a11eb4dea4474334318a4ca8dc22867b59daba6e93474f2a2af', 'http://norecipes.com/blog/2009/05/28/beef-tacos-recipe/', '[{\"text\":\"1\\/2 medium onion chopped\",\"quantity\":0.5,\"measure\":\"<unit>\",\"food\":\"onion\",\"weight\":55,\"foodCategory\":\"vegetables\",\"foodId\":\"food_bmrvi4ob4binw9a5m7l07amlfcoy\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/205\\/205e6bf2399b85d34741892ef91cc603.jpg\"},{\"text\":\"2 cloves garlic minced\",\"quantity\":2,\"measure\":\"clove\",\"food\":\"garlic\",\"weight\":6,\"foodCategory\":\"vegetables\",\"foodId\":\"food_avtcmx6bgjv1jvay6s6stan8dnyp\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/6ee\\/6ee142951f48aaf94f4312409f8d133d.jpg\"},{\"text\":\"1 lbs sliced or lean ground beef\",\"quantity\":1,\"measure\":\"pound\",\"food\":\"ground beef\",\"weight\":453.59237,\"foodCategory\":\"meats\",\"foodId\":\"food_boq91pbbhklr6sb0d9sbybzgklkm\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/cfa\\/cfae8f9276eaf8f0d9349ba662744a0c.jpg\"},{\"text\":\"2 Tbs chili powder\",\"quantity\":2,\"measure\":\"tablespoon\",\"food\":\"chili powder\",\"weight\":16,\"foodCategory\":\"Condiments and sauces\",\"foodId\":\"food_aii2sclb4r123rbfr2ybjasrl3nc\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/e6f\\/e6f19043caefc23b5feda5520076617e.jpg\"},{\"text\":\"1 tsp kosher salt\",\"quantity\":1,\"measure\":\"teaspoon\",\"food\":\"kosher salt\",\"weight\":4.854166666912875,\"foodCategory\":\"Condiments and sauces\",\"foodId\":\"food_a1vgrj1bs8rd1majvmd9ubz8ttkg\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/694\\/6943ea510918c6025795e8dc6e6eaaeb.jpg\"},{\"text\":\"1\\/2 tsp sugar\",\"quantity\":0.5,\"measure\":\"teaspoon\",\"food\":\"sugar\",\"weight\":2.1,\"foodCategory\":\"sugars\",\"foodId\":\"food_axi2ijobrk819yb0adceobnhm1c2\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/ecb\\/ecb3f5aaed96d0188c21b8369be07765.jpg\"},{\"text\":\"12 corn tortillas\",\"quantity\":12,\"measure\":\"<unit>\",\"food\":\"corn tortillas\",\"weight\":288,\"foodCategory\":\"quick breads and pastries\",\"foodId\":\"food_bhw0b95agm97s0abfignnb8fsvb3\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/b8a\\/b8ad23dcc06f2324f944e47eb579d644.jpg\"},{\"text\":\"1 recipe salsa verde\",\"quantity\":1,\"measure\":\"<unit>\",\"food\":\"salsa\",\"weight\":8.9,\"foodCategory\":\"canned soup\",\"foodId\":\"food_b0t3obfawlm5k2b6erxscacez35u\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/995\\/995d0f166754a0475c181b9c156fec43.jpg\"},{\"text\":\"cilantro\",\"quantity\":0,\"measure\":null,\"food\":\"cilantro\",\"weight\":8.42821536666913,\"foodCategory\":\"vegetables\",\"foodId\":\"food_alhzhuwb4lc7jnb5s6f02by60bzp\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/d57\\/d57e375b6ff99a90c7ee2b1990a1af36.jpg\"},{\"text\":\"lime wedges\",\"quantity\":1,\"measure\":\"wedge\",\"food\":\"lime\",\"weight\":8.375,\"foodCategory\":\"fruit\",\"foodId\":\"food_av58muyb8kg92fbk0g8g8aui5knv\",\"image\":\"https:\\/\\/www.edamam.com\\/food-img\\/48a\\/48a123c9576647c4ada6a41df5eeb22a.jpg\"}]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `search_history`
--

CREATE TABLE `search_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `search_term` varchar(255) NOT NULL,
  `search_count` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search_history`
--

INSERT INTO `search_history` (`id`, `user_id`, `search_term`, `search_count`) VALUES
(151, 19, 'kimchi', 1),
(152, 19, 'kimchi', 1),
(153, 19, 'kimchi', 1),
(154, 19, 'kimchi', 1),
(156, 19, 'kimchi', 1),
(157, 15, 'salad', 1),
(158, 15, 'salad', 1),
(159, 15, 'curry', 1),
(160, 20, 'rice', 1),
(161, 20, 'egg', 1),
(162, 20, 'rice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cuisine_type` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `cuisine_type`, `created_at`) VALUES
(15, 'user', '1112', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'korean', '2023-02-23 14:04:06'),
(19, 'test', '12314134', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 'italian', '2023-04-17 11:11:43'),
(20, 'pov', '99', 'pov@gmail.com', '202cb962ac59075b964b07152d234b70', 'greek', '2023-04-17 17:14:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_history`
--
ALTER TABLE `search_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- AUTO_INCREMENT for table `search_history`
--
ALTER TABLE `search_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `search_history`
--
ALTER TABLE `search_history`
  ADD CONSTRAINT `search_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
