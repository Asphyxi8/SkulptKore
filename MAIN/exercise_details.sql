-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 11:44 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicstore`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercise_details`
--
ALTER TABLE `exercise_details`
  ADD PRIMARY KEY (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercise_details`
--
ALTER TABLE `exercise_details`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
