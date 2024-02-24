-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 08:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skulptkore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(2, 'Rogue'),
(3, 'Bogue');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(2, 'Gloves'),
(3, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `exercise_details`
--

CREATE TABLE `exercise_details` (
  `e_id` int(11) NOT NULL,
  `exercise_name` varchar(255) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `body_part` varchar(255) NOT NULL,
  `difficulty_level` varchar(255) NOT NULL,
  `sets` int(11) NOT NULL,
  `reps` int(11) NOT NULL,
  `links` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exercise_details`
--

INSERT INTO `exercise_details` (`e_id`, `exercise_name`, `equipment`, `body_part`, `difficulty_level`, `sets`, `reps`, `links`) VALUES
(1, '90 Lat Stretch', 'No Equipment', 'Back', 'Beginner', 3, 5, 'https://www.youtube.com/embed/ylf2LRmYzGk'),
(2, 'Agility Ladder: Lateral Shuffle', 'Ladder', 'Butt/Hips, Full Body/Integrated, Legs - Calves and Shins, Legs - Thighs', 'advanced', 4, 15, 'https://www.youtube.com/embed/iBmvPEWt5og'),
(3, 'Alternate Leg Push-off', 'Raised Platform/Box', 'Butt/Hips, Legs - Calves and Shins, Legs - Thighs', 'advanced', 4, 10, 'https://www.youtube.com/embed/4u8GBUhYSe0'),
(4, 'Back Squat', 'Barbell', 'Butt/Hips, Legs - Thighs', 'advanced', 4, 15, 'https://www.youtube.com/embed/QmZAiBqPvZw'),
(5, 'Barbell Jammers', 'Barbell', 'Abs, Butt/Hips, Full Body/Integrated, Legs - Calves and Shins, Legs - Thighs, Shoulders', 'advanced', 4, 15, 'https://www.youtube.com/embed/vFzslfMHN8k'),
(6, 'Bent Knee Push-up', 'No Equipment', 'Arms, Chest, Shoulders', 'Beginner', 3, 10, 'https://www.youtube.com/embed/jWxvty2KROs'),
(7, 'Bent-over Row', 'Barbell', 'Arms, Back, Shoulders', 'advanced', 4, 10, 'https://www.youtube.com/embed/ZathOyxYZ3M'),
(8, 'Bicep Curl', 'Barbell', 'Arms', 'Intermediate', 3, 10, 'https://www.youtube.com/embed/kwG2ipFRgfo'),
(9, 'Bird-dog', 'No Equipment', 'Abs, Back, Butt/Hips', 'Intermediate', 3, 20, 'https://www.youtube.com/embed/wiFNA3sqjCA'),
(10, 'Bodyweight Squat', 'No Equipment', 'Abs, Butt/Hips, Legs - Calves and Shins, Legs - Thighs', 'Beginner', 3, 5, 'https://www.youtube.com/embed/m0GcZ24pK6k'),
(11, 'Bottom-up Press', 'Kettlebells', 'Chest, Full Body/Integrated, Shoulders', 'advanced', 4, 15, 'https://www.youtube.com/embed/J5LEpIZSDS0'),
(12, 'Box Jumps', 'Raised Platform/Box', 'Butt/Hips, Legs - Calves and Shins, Legs - Thighs', 'Intermediate', 3, 10, 'https://www.youtube.com/embed/188T6x5yqRI'),
(13, 'Bulgarian Split Squat', 'Bench, Dumbbells', 'Butt/Hips', 'advanced', 4, 10, 'https://www.youtube.com/embed/2C-uNgKwPLE'),
(14, 'Calf Raises', 'Barbell', 'Legs - Calves and Shins', 'Intermediate', 3, 15, 'https://www.youtube.com/embed/-M4-G8p8fmc'),
(15, 'Cat-Cow', 'No Equipment', 'Back, Chest', 'Beginner', 3, 10, 'https://www.youtube.com/embed/KpNznspZZEY'),
(16, 'Chest Press', 'Bench, Dumbbells', 'Arms, Chest, Shoulders', 'Intermediate', 3, 15, 'https://www.youtube.com/embed/KjYak5vZO9s'),
(17, 'Childs Pose', 'No Equipment', 'Abs, Back, Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, 'https://www.youtube.com/embed/2vJKSlfLX10'),
(18, 'Chin-ups', 'Pull up bar', 'Arms, Back', 'Intermediate', 3, 20, 'https://www.youtube.com/embed/_71FpEaq-fQ'),
(19, 'CKC Parascapular Exercises', 'No Equipment', 'Chest, Shoulders', 'Intermediate', 3, 10, 'https://www.youtube.com/embed/9WhlXuIc2pE'),
(20, 'Close-grip Bench Press', 'Barbell', 'Arms, Chest', 'Intermediate', 3, 15, 'https://www.youtube.com/embed/RwcikY07r74'),
(21, 'Cobra Exercise', 'No Equipment', 'Abs, Back', 'Beginner', 3, 5, 'https://www.youtube.com/embed/CxI6DjNafyw'),
(22, 'Contralateral Limb Raises', 'No Equipment', 'Back, Butt/Hips, Shoulders', 'Beginner', 3, 10, 'https://www.youtube.com/embed/GdvXKytQrQY'),
(23, 'Crunch', 'No Equipment', 'Abs', 'Beginner', 3, 10, 'https://www.youtube.com/watch?v=Xyd_fa5zoEU'),
(24, 'Cycled Split-Squat Jump', 'No Equipment', 'Butt/Hips, Legs - Calves and Shins, Legs - Thighs', 'Intermediate', 3, 15, 'https://www.youtube.com/embed/AjZeAPC7SSU'),
(25, 'Diagonal Raise', 'Dumbbells', 'Shoulders', 'Intermediate', 3, 15, 'https://www.youtube.com/embed/lS9S07Vq8Go'),
(26, 'Dirty Dog', 'No Equipment', 'Abs, Butt/Hips', 'Beginner', 3, 10, 'https://www.youtube.com/embed/XurPNNx4vQQ'),
(27, 'Downward-facing Dog', 'No Equipment', 'Arms, Back, Butt/Hips, Full Body/Integrated, Legs - Calves and Shins, Legs - Thighs', 'Intermediate', 3, 15, ''),
(28, 'Elevated Glute Bridge', 'Bench, Dumbbells', 'Butt/Hips', 'Intermediate', 3, 15, ''),
(29, 'Forward Hurdle Run', 'Hurdles', 'Butt/Hips, Legs - Calves and Shins', 'Beginner', 3, 10, ''),
(30, 'Forward Linear Jumps', 'No Equipment', 'Butt/Hips, Full Body/Integrated, Legs - Calves and Shins, Legs - Thighs', 'Beginner', 3, 10, ''),
(31, 'Forward Lunge', 'No Equipment', 'Abs, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 20, ''),
(32, 'Forward Lunge with Arm Drivers', 'No Equipment', 'Abs, Butt/Hips, Legs - Thighs', 'advanced', 4, 15, ''),
(33, 'Forward Stepping over Cones', 'Cones', 'Abs, Butt/Hips', 'Beginner', 3, 10, ''),
(34, 'Front Plank', 'No Equipment', 'Abs, Back', 'Intermediate', 3, 10, ''),
(35, 'Front Raise', 'Dumbbells', 'Shoulders', 'Beginner', 3, 10, ''),
(36, 'Front Squat', 'Dumbbells', 'Back, Butt/Hips, Full Body/Integrated, Legs - Thighs', 'Intermediate', 3, 20, ''),
(37, 'Glute Activation Lunges', 'No Equipment', 'Abs, Butt/Hips, Legs - Thighs', 'advanced', 4, 15, ''),
(38, 'Glute Bridge', 'Stability Ball', 'Abs, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 20, ''),
(39, 'Glute Bridge Exercise', 'No Equipment', 'Abs, Butt/Hips', 'Beginner', 3, 10, ''),
(40, 'Glute Bridge Single Leg Progression', 'No Equipment', 'Back, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 20, ''),
(41, 'Goblet Squat', 'Dumbbells', 'Butt/Hips, Legs - Thighs', 'Intermediate', 3, 10, ''),
(42, 'Half-kneeling Hay Baler', 'Medicine Ball', 'Abs', 'Beginner', 3, 10, ''),
(43, 'Halo', 'Kettlebells', 'Back, Butt/Hips, Chest, Full Body/Integrated, Legs - Thighs, Shoulders', 'advanced', 4, 10, ''),
(44, 'Hammer Curl', 'Dumbbells', 'Arms', 'Intermediate', 3, 10, ''),
(45, 'Hexagon Drill', 'Cones', 'Abs, Butt/Hips, Full Body/Integrated, Legs - Thighs', 'advanced', 4, 10, ''),
(46, 'High Plank T-spine Rotation', 'No Equipment', 'Abs, Shoulders', 'advanced', 4, 15, ''),
(47, 'High Row', 'Resistance Bands/Cables', 'Back', 'Intermediate', 3, 15, ''),
(48, 'Hip Bridge', 'Barbell', 'Butt/Hips', 'Intermediate', 3, 15, ''),
(49, 'Hip Hinge', 'Barbell', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, ''),
(50, 'Hip Rotations (Push-up Position)', 'No Equipment', 'Abs, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 10, ''),
(51, 'Inchworms', 'No Equipment', 'Abs, Arms, Back, Chest, Full Body/Integrated, Shoulders', 'advanced', 4, 15, ''),
(52, 'Incline Chest Press', 'Bench, Dumbbells', 'Chest, Shoulders', 'Beginner', 3, 10, ''),
(53, 'Incline Reverse Fly', 'Bench, Dumbbells', 'Back, Shoulders', 'Beginner', 3, 10, ''),
(54, 'Inverted Flyers', 'No Equipment', 'Abs, Butt/Hips, Full Body/Integrated, Legs - Thighs', 'advanced', 4, 10, ''),
(55, 'Jump and Reach', 'No Equipment', 'Butt/Hips, Legs - Calves and Shins, Legs - Thighs', 'Intermediate', 3, 15, ''),
(56, 'Kneeling ABC\'s', 'Stability Ball', 'Abs', 'Beginner', 3, 5, ''),
(57, 'Kneeling Hip-flexor Stretch', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, ''),
(58, 'Kneeling Lat Pulldown', 'Resistance Bands/Cables', 'Back', 'Intermediate', 3, 10, ''),
(59, 'Kneeling Reverse Fly', 'Resistance Bands/Cables', 'Back, Shoulders', 'Intermediate', 3, 15, ''),
(60, 'Kneeling TA Stretch', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 5, ''),
(61, 'Lateral Hurdle Run', 'Hurdles', 'Full Body/Integrated, Legs - Calves and Shins, Legs - Thighs', 'Intermediate', 3, 20, ''),
(62, 'Lateral Lunge', 'Dumbbells', 'Butt/Hips, Legs - Thighs', 'Intermediate', 3, 15, ''),
(63, 'Lateral Neck Flexion', 'No Equipment', 'Neck', 'Beginner', 3, 5, ''),
(64, 'Lateral Over Unders', 'No Equipment, Raised Platform/Box', 'Abs, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 20, ''),
(65, 'Lateral Raise', 'Dumbbells', 'Shoulders', 'Beginner', 3, 5, ''),
(66, 'Lateral Shoulder Raise', 'Dumbbells', 'Shoulders', 'Beginner', 3, 10, ''),
(67, 'Lateral Shuffles', 'Cones', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, ''),
(68, 'Lateral Zig Zags', 'Cones', 'Legs - Calves and Shins, Legs - Thighs', 'advanced', 4, 15, ''),
(69, 'Leg Crossover Stretch', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, ''),
(70, 'Lunge', 'Dumbbells', 'Butt/Hips, Legs - Thighs', 'Intermediate', 3, 10, ''),
(71, 'Lunge with Elbow Instep', 'No Equipment', 'Abs, Butt/Hips, Full Body/Integrated, Legs - Thighs', 'Intermediate', 3, 15, ''),
(72, 'Lunge with Overhead Press', 'Medicine Ball', 'Abs, Butt/Hips, Full Body/Integrated, Legs - Thighs, Shoulders', 'advanced', 4, 10, ''),
(73, 'Lying Chest Fly', 'Bench, Dumbbells', 'Chest, Shoulders', 'Intermediate', 3, 15, ''),
(74, 'Lying Pullovers', 'Bench, Dumbbells', 'Chest', 'Intermediate', 3, 10, ''),
(75, 'Medicine Ball Lunge to Chest Pass', 'Medicine Ball', 'Abs, Back, Butt/Hips, Chest, Full Body/Integrated, Shoulders', 'advanced', 4, 15, ''),
(76, 'Medicine Ball Push-ups', 'Medicine Ball', 'Abs, Chest, Shoulders', 'advanced', 4, 15, ''),
(77, 'Modified Hurdler\'s Stretch', 'No Equipment', 'Legs - Thighs', 'Beginner', 3, 10, ''),
(78, 'Mountain Climbers', 'No Equipment', 'Butt/Hips, Full Body/Integrated, Legs - Thighs', 'advanced', 4, 15, ''),
(79, 'Neck Flexion and Extension', 'No Equipment', 'Neck', 'Beginner', 3, 5, ''),
(80, 'Offset Single-arm Chest Press', 'Bench, Dumbbells', 'Chest, Full Body/Integrated', 'advanced', 4, 10, ''),
(81, 'Overhead Medicine Ball Throws', 'Medicine Ball', 'Butt/Hips, Full Body/Integrated, Shoulders', 'Intermediate', 3, 10, ''),
(82, 'Overhead Slams', 'Medicine Ball', 'Back, Butt/Hips, Full Body/Integrated, Legs - Thighs, Shoulders', 'Intermediate', 3, 15, ''),
(83, 'Overhead Triceps Stretch', 'No Equipment', 'Arms', 'Beginner', 3, 10, ''),
(84, 'Partner Assisted Bodyweight Squats', 'No Equipment', 'Abs, Butt/Hips, Legs - Thighs', 'Beginner', 3, 5, ''),
(85, 'Partner Standing Row with Resistance Tubing', 'Resistance Bands/Cables', 'Arms, Back, Butt/Hips', 'Intermediate', 3, 10, ''),
(86, 'Partner Tricep Extension', 'Resistance Bands/Cables', 'Abs, Arms, Butt/Hips', 'Beginner', 3, 5, ''),
(87, 'Plank with Knee Drag', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Intermediate', 3, 10, ''),
(88, 'Plank-ups', 'No Equipment', 'Abs, Arms, Chest', 'Intermediate', 3, 20, ''),
(89, 'Power Push Down', 'Medicine Ball', 'Arms, Chest', 'advanced', 4, 15, ''),
(90, 'Prone (Lying) Hamstrings Curl', 'Resistance Bands/Cables', 'Legs - Thighs', 'Beginner', 3, 5, ''),
(91, 'Prone ABC\'s', 'Stability Ball', 'Abs', 'advanced', 4, 10, ''),
(92, 'Prone Scapular (Shoulder) Stabilization Series - I, Y, T, W, O Formation', 'No Equipment', 'Back, Shoulders', 'Intermediate', 3, 15, ''),
(93, 'Pull-over Crunch', 'Kettlebells', 'Abs', 'Intermediate', 3, 15, ''),
(94, 'Pull-ups', 'Pull up bar', 'Arms, Back', 'Intermediate', 3, 10, ''),
(95, 'Push-up', 'No Equipment', 'Arms, Chest, Shoulders', 'Intermediate', 3, 20, ''),
(96, 'Push-up with Single-leg Raise', 'No Equipment', 'Arms, Butt/Hips, Chest, Full Body/Integrated, Shoulders', 'advanced', 4, 15, ''),
(97, 'Push-up with Staggered Hands', 'No Equipment', 'Arms, Chest', 'advanced', 4, 15, ''),
(98, 'Quadruped Bent-knee Hip Extensions', 'No Equipment', 'Abs, Butt/Hips', 'Beginner', 3, 5, ''),
(99, 'Reverse Ab Crunch', 'No Equipment', 'Abs', 'Intermediate', 3, 15, ''),
(100, 'Reverse Bicep Curl', 'Barbell', 'Arms', 'Intermediate', 3, 15, ''),
(101, 'Reverse Fly', 'Resistance Bands/Cables', 'Back, Shoulders', 'Intermediate', 3, 20, ''),
(102, 'Reverse Lunge', 'Barbell', 'Butt/Hips, Legs - Thighs', 'Intermediate', 3, 20, ''),
(103, 'Reverse Lunge with Rotation', 'Dumbbells', 'Abs, Full Body/Integrated, Legs - Thighs', 'advanced', 4, 10, ''),
(104, 'Reverse Slam', 'Medicine Ball', 'Butt/Hips, Full Body/Integrated, Legs - Thighs, Shoulders', 'Intermediate', 3, 10, ''),
(105, 'Roll Out', 'Barbell', 'Abs', 'advanced', 4, 10, ''),
(106, 'Romanian Deadlift', 'Barbell', 'Back, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 20, ''),
(107, 'Rotational Overhead Press', 'Dumbbells', 'Shoulders', 'advanced', 4, 15, ''),
(108, 'Rotational Uppercut', 'Dumbbells', 'Arms, Full Body/Integrated, Shoulders', 'Intermediate', 3, 15, ''),
(109, 'Rotator Cuff External Rotation', 'Resistance Bands/Cables', 'Shoulders', 'Beginner', 3, 5, ''),
(110, 'Rotator Cuff Internal Rotation', 'Resistance Bands/Cables', 'Shoulders', 'Beginner', 3, 5, ''),
(111, 'Russian Twist', 'Stability Ball', 'Abs, Butt/Hips, Legs - Thighs', 'advanced', 4, 10, ''),
(112, 'Seated Bent-Knee Biceps Stretch', 'No Equipment', 'Arms', 'Beginner', 3, 10, ''),
(113, 'Seated Biceps Curl', 'Bench, Dumbbells', 'Arms', 'Beginner', 3, 10, ''),
(114, 'Seated Butterfly Stretch', 'No Equipment', 'Legs - Thighs', 'Beginner', 3, 5, ''),
(115, 'Seated Cable Press', 'Resistance Bands/Cables', 'Chest', 'Beginner', 3, 10, ''),
(116, 'Seated Calf Stretch', 'No Equipment', 'Legs - Calves and Shins', 'Beginner', 3, 10, ''),
(117, 'Seated Crunch', 'no Equipment', 'Abs', 'Beginner', 3, 5, ''),
(118, 'Seated Decline Cable Press', 'Resistance Bands/Cables', 'Chest', 'Beginner', 3, 5, ''),
(119, 'Seated High Back Row', 'Bench, Resistance Bands/Cables', 'Arms, Back, Shoulders', 'Beginner', 3, 10, ''),
(120, 'Seated Incline Cable Press', 'Resistance Bands/Cables', 'Chest', 'Beginner', 3, 5, ''),
(121, 'Seated Medicine Ball Trunk Rotations', 'Medicine Ball', 'Abs', 'Beginner', 3, 5, ''),
(122, 'Seated Overhead Press', 'Bench, Dumbbells', 'Arms, Shoulders', 'Intermediate', 3, 20, ''),
(123, 'Seated Row', 'Resistance Bands/Cables', 'Arms, Back', 'Beginner', 3, 10, ''),
(124, 'Seated Side-Straddle Stretch', 'No Equipment', 'Abs, Back, Legs - Thighs', 'Beginner', 3, 5, ''),
(125, 'Seated Straddle Stretch', 'No Equipment', 'Back, Legs - Thighs', 'Beginner', 3, 5, ''),
(126, 'Seated Straddle with Side Reaches', 'No Equipment', 'Abs, Back, Legs - Thighs', 'Intermediate', 3, 10, ''),
(127, 'Seated Toe Touches', 'No Equipment', 'Legs - Calves and Shins, Legs - Thighs', 'Beginner', 3, 5, ''),
(128, 'Shoulder Packing', 'No Equipment', 'Back, Shoulders', 'Beginner', 3, 10, ''),
(129, 'Shoulder Stability-Mobility Series - I, Y, T, W Formations', 'No Equipment', 'Shoulders', 'Intermediate', 3, 10, ''),
(130, 'Shrug', 'Barbell', 'Back', 'Intermediate', 3, 20, ''),
(131, 'Side Lunge', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Intermediate', 3, 10, ''),
(132, 'Side Lying Hip Abduction', 'No Equipment', 'Butt/Hips', 'Beginner', 3, 5, ''),
(133, 'Side Lying Hip Adduction', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, ''),
(134, 'Side Lying Quadriceps Stretch', 'No Equipment', 'Legs - Thighs', 'Beginner', 3, 5, ''),
(135, 'Side Plank - modified', 'No Equipment', 'Abs, Butt/Hips', 'Beginner', 3, 5, ''),
(136, 'Side Plank (Modified)', 'No Equipment', 'Abs, Butt/Hips', 'advanced', 4, 15, ''),
(137, 'Side Plank with Straight Leg', 'No Equipment', 'Abs, Butt/Hips', 'Intermediate', 3, 20, ''),
(138, 'Side-lying Arm Rolls', 'Dumbbells, No Equipment', 'Abs, Shoulders', 'advanced', 4, 15, ''),
(139, 'Single Arm Overhead Press', 'Kettlebells', 'Full Body/Integrated, Shoulders', 'Intermediate', 3, 10, ''),
(140, 'Single Arm Overhead Squat', 'Kettlebells', 'Back, Full Body/Integrated, Legs - Thighs, Shoulders', 'advanced', 4, 10, ''),
(141, 'Single Arm Plank', 'No Equipment', 'Abs', 'Intermediate', 3, 15, ''),
(142, 'Single Arm Row', 'Resistance Bands/Cables', 'Back', 'Intermediate', 3, 10, ''),
(143, 'Single Leg Hamstring Curl', 'Stability Ball', 'Butt/Hips, Legs - Thighs', 'advanced', 4, 10, ''),
(144, 'Single Leg Push-off', 'Raised Platform/Box', 'Butt/Hips, Legs - Calves and Shins, Legs - Thighs', 'Beginner', 3, 10, ''),
(145, 'Single Leg Romanian Dead Lift', 'Resistance Bands/Cables', 'Butt/Hips', 'advanced', 4, 15, ''),
(146, 'Single Leg Squat', 'No Equipment', 'Butt/Hips, Legs - Calves and Shins, Legs - Thighs', 'Intermediate', 3, 20, ''),
(147, 'Single Leg Stand', 'No Equipment', 'Abs', 'Beginner', 3, 10, ''),
(148, 'Single-arm Chest Press', 'Resistance Bands/Cables', 'Chest', 'Intermediate', 3, 15, ''),
(149, 'Single-arm Lateral Raise', 'Resistance Bands/Cables', 'Shoulders', 'Beginner', 3, 5, ''),
(150, 'Single-arm Medicine Ball Push-up', 'Medicine Ball', 'Abs, Arms, Chest, Shoulders', 'advanced', 4, 10, ''),
(151, 'Single-arm Rotational Press', 'Resistance Bands/Cables', 'Chest', 'advanced', 4, 15, ''),
(152, 'Single-arm Row', 'Bench, Dumbbells', 'Back', 'Intermediate', 3, 20, ''),
(153, 'Single-arm, Single-leg Romanian Dead Lift', 'Dumbbells', 'Back, Butt/Hips', 'advanced', 4, 10, ''),
(154, 'Single-leg Romanian Deadlift', 'No Equipment', 'Butt/Hips', 'advanced', 4, 15, ''),
(155, 'Single-leg Stand with Reaches', 'Medicine Ball', 'Abs', 'advanced', 4, 10, ''),
(156, 'Spider Walks', 'No Equipment', 'Arms, Full Body/Integrated', 'Intermediate', 3, 20, ''),
(157, 'Spinal Twist with a Push-Pull Movement', 'No Equipment', 'Back, Chest, Shoulders', 'advanced', 4, 15, ''),
(158, 'Squat', 'Medicine Ball', 'Butt/Hips', 'Intermediate', 3, 15, ''),
(159, 'Squat Jump', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 5, ''),
(160, 'Squat Jumps', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 5, ''),
(161, 'Squat to Overhead Raise', 'Dumbbells', 'Abs, Full Body/Integrated, Legs - Thighs, Shoulders', 'Intermediate', 3, 15, ''),
(162, 'Stability Ball Hamstring Curl', 'Stability Ball', 'Butt/Hips, Legs - Thighs', 'Intermediate', 3, 15, ''),
(163, 'Stability Ball Knee Tucks', 'Stability Ball', 'Abs, Legs - Calves and Shins', 'advanced', 4, 15, ''),
(164, 'Stability Ball Pikes', 'Stability Ball', 'Abs, Shoulders', 'advanced', 4, 15, ''),
(165, 'Stability Ball Prone Walkout', 'Stability Ball', 'Abs, Back', 'Intermediate', 3, 10, ''),
(166, 'Stability Ball Push-Up', 'Stability Ball', 'Chest, Shoulders', 'Intermediate', 3, 10, ''),
(167, 'Stability Ball Reverse Extensions', 'Stability Ball', 'Back, Butt/Hips', 'advanced', 4, 15, ''),
(168, 'Stability Ball Shoulder Stabilization', 'Stability Ball', 'Back, Shoulders', 'Intermediate', 3, 15, ''),
(169, 'Stability Ball Sit-ups / Crunches', 'Stability Ball', 'Abs', 'Beginner', 3, 10, ''),
(170, 'Stability Ball Wall Squats', 'Stability Ball', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 5, ''),
(171, 'Standing Ankle Mobilization', 'No Equipment', 'Legs - Calves and Shins', 'Intermediate', 3, 20, ''),
(172, 'Standing Anti-rotation Press', 'Resistance Bands/Cables', 'Abs, Arms, Chest', 'Intermediate', 3, 10, ''),
(173, 'Standing Bicep Curl', 'Resistance Bands/Cables', 'Arms', 'Beginner', 3, 10, ''),
(174, 'Standing Calf Raises - Wall', 'No Equipment', 'Legs - Calves and Shins', 'Beginner', 3, 5, ''),
(175, 'Standing Chest Fly', 'Resistance Bands/Cables', 'Chest', 'Intermediate', 3, 20, ''),
(176, 'Standing Chest Stretch', 'No Equipment', 'Chest', 'Beginner', 3, 10, ''),
(177, 'Standing Crunch', 'Resistance Bands/Cables', 'Abs', 'Beginner', 3, 10, ''),
(178, 'Standing Dorsi-Flexion (Calf Stretch)', 'No Equipment', 'Legs - Calves and Shins', 'Beginner', 3, 5, ''),
(179, 'Standing Gate Openers (Frankensteins)', 'No Equipment', 'Abs, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 15, ''),
(180, 'Standing Hamstrings Curl', 'Resistance Bands/Cables', 'Abs, Legs - Thighs', 'Intermediate', 3, 20, ''),
(181, 'Standing Hay Baler', 'Medicine Ball', 'Abs', 'advanced', 4, 15, ''),
(182, 'Standing Hip Abduction', 'Resistance Bands/Cables', 'Abs, Butt/Hips, Full Body/Integrated', 'Intermediate', 3, 20, ''),
(183, 'Standing Hip Adduction', 'Resistance Bands/Cables', 'Abs, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 10, ''),
(184, 'Standing Leg Extension', 'Resistance Bands/Cables', 'Abs, Legs - Thighs', 'Intermediate', 3, 15, ''),
(185, 'Standing Lunge Stretch', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, ''),
(186, 'Standing Row', 'Resistance Bands/Cables', 'Back', 'Intermediate', 3, 20, ''),
(187, 'Standing Shoulder Extension', 'No Equipment', 'Arms', 'Beginner', 3, 10, ''),
(188, 'Standing Shoulder Press', 'Barbell', 'Arms, Shoulders', 'advanced', 4, 10, ''),
(189, 'Standing Shrug', 'Dumbbells', 'Back', 'Intermediate', 3, 10, ''),
(190, 'Standing Single-leg Cable Rotation', 'Resistance Bands/Cables', 'Abs', 'advanced', 4, 10, ''),
(191, 'Standing Triangle Straddle Bends', 'No Equipment', 'Back, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 15, ''),
(192, 'Standing Trunk Rotation', 'Resistance Bands/Cables', 'Abs', 'Intermediate', 3, 15, ''),
(193, 'Standing Trunk Rotation', 'Medicine Ball', 'Abs', 'Intermediate', 3, 15, ''),
(194, 'Standing Wood Chop', 'Medicine Ball', 'Abs', 'advanced', 4, 15, ''),
(195, 'Step Stretch', 'Raised Platform/Box', 'Legs - Calves and Shins', 'Intermediate', 3, 15, ''),
(196, 'Step-up', 'Dumbbells, Raised Platform/Box', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 5, ''),
(197, 'Straight Arm Pressdown', 'Resistance Bands/Cables', 'Back', 'Intermediate', 3, 10, ''),
(198, 'Sumo Rotational Squats', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Intermediate', 3, 10, ''),
(199, 'Supermans', 'No Equipment', 'Back, Butt/Hips, Shoulders', 'Beginner', 3, 10, ''),
(200, 'Supine 90-90 Hip Rotator Stretch', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, ''),
(201, 'Supine Bicycle Crunches', 'No Equipment', 'Abs', 'Intermediate', 3, 15, ''),
(202, 'Supine Dead Bug', 'No Equipment', 'Abs', 'Beginner', 3, 10, ''),
(203, 'Supine Hamstrings Stretch', 'No Equipment', 'Legs - Calves and Shins, Legs - Thighs', 'Beginner', 3, 5, ''),
(204, 'Supine Hip Flexor Stretch', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, ''),
(205, 'Supine Hollowing with Lower Extremity Movements', 'No Equipment', 'Abs', 'Beginner', 3, 10, ''),
(206, 'Supine IT Band Stretch', 'No Equipment', 'Legs - Thighs', 'Intermediate', 3, 10, ''),
(207, 'Supine Pelvic Tilts', 'No Equipment', 'Abs', 'Beginner', 3, 10, ''),
(208, 'Supine Reverse Marches', 'No Equipment', 'Abs', 'Beginner', 3, 10, ''),
(209, 'Supine Rotator Cuff', 'No Equipment', 'Abs, Shoulders', 'Beginner', 3, 5, ''),
(210, 'Supine Shoulder Flexion', 'No Equipment', 'Shoulders', 'Beginner', 3, 5, ''),
(211, 'Supine Shoulder Roll', 'Stability Ball', 'Abs, Butt/Hips', 'Intermediate', 3, 20, ''),
(212, 'Supine Snow Angel (Wipers) Exercise', 'No Equipment', 'Abs, Chest, Shoulders', 'Beginner', 3, 10, ''),
(213, 'Supine Spinal Twist with Rib Grab and Progressions', 'No Equipment', 'Abs, Back, Chest, Shoulders', 'Intermediate', 3, 15, ''),
(214, 'Supine Suitcase Pass', 'Stability Ball', 'Abs', 'advanced', 4, 10, ''),
(215, 'Thomas Stretch', 'No Equipment', 'Butt/Hips, Legs - Thighs', 'Beginner', 3, 10, ''),
(216, 'Transverse Lunge', 'Dumbbells', 'Butt/Hips', 'advanced', 4, 15, ''),
(217, 'Tricep Pressdown Exercise', 'Resistance Bands/Cables', 'Arms', 'Beginner', 3, 10, ''),
(218, 'Triceps Extension', 'Dumbbells', 'Arms', 'Intermediate', 3, 15, ''),
(219, 'Triceps Kickback', 'Dumbbells', 'Arms', 'Beginner', 3, 10, ''),
(220, 'Triceps Pressdown', 'Resistance Bands/Cables', 'Arms', 'Beginner', 3, 10, ''),
(221, 'Tuck Jump', 'No Equipment', 'Butt/Hips', 'Intermediate', 3, 15, ''),
(222, 'Upward Facing Dog', 'No Equipment', 'Abs, Back', 'Beginner', 3, 5, ''),
(223, 'V Sit Partner Rotations', 'Medicine Ball', 'Abs', 'Beginner', 3, 5, ''),
(224, 'Vertical Toe Touches', 'No Equipment', 'Abs', 'Intermediate', 3, 10, ''),
(225, 'V-raise', 'Dumbbells', 'Shoulders', 'Beginner', 3, 5, ''),
(226, 'V-ups', 'No Equipment', 'Abs', 'Intermediate', 3, 20, ''),
(227, 'Walking Abduction', 'Resistance Bands/Cables', 'Butt/Hips', 'Beginner', 3, 5, ''),
(228, 'Walking Lunges with Twists', 'Medicine Ball', 'Abs, Butt/Hips, Legs - Thighs', 'Intermediate', 3, 15, ''),
(229, 'Warrior I', 'No Equipment', 'Butt/Hips, Full Body/Integrated, Legs - Thighs', 'Beginner', 3, 5, ''),
(230, 'Wrist Curl - Extension', 'Bench, Dumbbells', 'Arms', 'Beginner', 3, 5, ''),
(231, 'Wrist Curl - Flexion', 'Bench, Dumbbells', 'Arms', 'Beginner', 3, 5, ''),
(232, 'Wrist Supination & Pronation Exercises', 'Bench, Dumbbells', 'Arms', 'Beginner', 3, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `exercise_log`
--

CREATE TABLE `exercise_log` (
  `user_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `log` varchar(2000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `count_exercises` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercise_log`
--

INSERT INTO `exercise_log` (`user_id`, `log_id`, `log`, `timestamp`, `count_exercises`) VALUES
(8, 7, 'a:1:{i:0;a:3:{s:4:\"name\";s:38:\"Wrist Supination & Pronation Exercises\";s:5:\"level\";s:8:\"Beginner\";s:9:\"equipment\";s:16:\"Bench, Dumbbells\";}}', '2023-04-15 15:35:50', 0),
(7, 8, 'a:2:{i:0;a:3:{s:4:\"name\";s:14:\"90 Lat Stretch\";s:5:\"level\";s:8:\"Beginner\";s:9:\"equipment\";s:12:\"No Equipment\";}i:1;a:3:{s:4:\"name\";s:31:\"Agility Ladder: Lateral Shuffle\";s:5:\"level\";s:8:\"advanced\";s:9:\"equipment\";s:6:\"Ladder\";}}', '2023-04-21 06:46:14', 1),
(7, 9, 'a:4:{i:0;a:3:{s:4:\"name\";s:15:\"Bottom-up Press\";s:5:\"level\";s:8:\"advanced\";s:9:\"equipment\";s:11:\"Kettlebells\";}i:1;a:3:{s:4:\"name\";s:9:\"Box Jumps\";s:5:\"level\";s:12:\"Intermediate\";s:9:\"equipment\";s:19:\"Raised Platform/Box\";}i:2;a:3:{s:4:\"name\";s:7:\"Cat-Cow\";s:5:\"level\";s:8:\"Beginner\";s:9:\"equipment\";s:12:\"No Equipment\";}i:3;a:3:{s:4:\"name\";s:11:\"Chest Press\";s:5:\"level\";s:12:\"Intermediate\";s:9:\"equipment\";s:16:\"Bench, Dumbbells\";}}', '2023-04-21 06:45:16', 3),
(7, 10, 'a:2:{i:0;a:3:{s:4:\"name\";s:22:\"Alternate Leg Push-off\";s:5:\"level\";s:8:\"advanced\";s:9:\"equipment\";s:19:\"Raised Platform/Box\";}i:1;a:3:{s:4:\"name\";s:10:\"Back Squat\";s:5:\"level\";s:8:\"advanced\";s:9:\"equipment\";s:7:\"Barbell\";}}', '2023-04-21 06:45:24', 2),
(7, 11, 'a:2:{i:0;a:3:{s:4:\"name\";s:31:\"Agility Ladder: Lateral Shuffle\";s:5:\"level\";s:8:\"advanced\";s:9:\"equipment\";s:6:\"Ladder\";}i:1;a:3:{s:4:\"name\";s:17:\"Bent Knee Push-up\";s:5:\"level\";s:8:\"Beginner\";s:9:\"equipment\";s:12:\"No Equipment\";}}', '2023-04-19 06:51:15', 2),
(7, 12, 'a:1:{i:0;a:3:{s:4:\"name\";s:15:\"Barbell Jammers\";s:5:\"level\";s:8:\"advanced\";s:9:\"equipment\";s:7:\"Barbell\";}}', '2023-04-18 06:52:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(12, 7, 2147483647, 696572103, 1, '2023-04-13 09:45:24', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 7, 696572103, 10, 3, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_desc`, `product_keywords`, `category_id`, `brand_id`, `product_image`, `product_price`, `date`, `status`) VALUES
(10, 'ATG Dumbbellxx', 'Rogue ATG Dumbbells X (10 dumbbell set) 2x 3kg, 2x 4kg, 2x 5kg, 2x 6kg, 2x 8kg', 'Dumbbell, Dumbbells, Strength, weights, weight, weight lifting, cheap, strength training, rogue', 2, 3, 'WIN_20220924_15_35_28_Pro.jpg', '10000000000', '2023-04-09 13:09:39', 'true'),
(11, 'DEAD', 'Rogue ATG Dumbbells X (10 dumbbell set) 2x 3kg, 2x 4kg, 2x 5kg, 2x 6kg, 2x 8kg', 'Dumbbell, Dumbbells, Strength, weights, weight, weight lifting, cheap, strength training, rogue', 3, 2, 'WIN_20220924_15_35_28_Pro.jpg', '50', '2023-04-09 15:09:39', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `temp_exercise_log`
--

CREATE TABLE `temp_exercise_log` (
  `temp_id` int(11) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_level` varchar(100) NOT NULL,
  `e_body` varchar(255) NOT NULL,
  `e_equipment` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `e_link` varchar(1000) NOT NULL,
  `e_sets` int(11) NOT NULL,
  `e_reps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `username`, `user_email`, `user_password`, `user_ip`, `user_address`) VALUES
(7, 'kaniska', 'kaniska@somaiya.edu', '$2y$10$gbBL8QVRY2onL7TP.KjX5uCLauwQLYKFmebTIxK7QfHBxhILmcyWq', '::1', 'lmao'),
(8, 'Kamlesh', 'priyansh.r@somaiya.edu', '$2y$10$.0.C8.BVzAQCQF5.61OpS.eSqbRIIUG7J8l2tKEo9R6rcIz4AySD2', '::1', '23-B-C');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(6, 12, 696572103, 2147483647, 'PayPal', '2023-04-13 09:45:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`,`ip_address`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `exercise_details`
--
ALTER TABLE `exercise_details`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `exercise_log`
--
ALTER TABLE `exercise_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `temp_exercise_log`
--
ALTER TABLE `temp_exercise_log`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exercise_details`
--
ALTER TABLE `exercise_details`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `exercise_log`
--
ALTER TABLE `exercise_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `temp_exercise_log`
--
ALTER TABLE `temp_exercise_log`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
