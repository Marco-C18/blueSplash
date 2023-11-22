-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 17:18:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bluesplash`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` int(11) NOT NULL,
  `categoria` varchar(500) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria`, `stock`, `img`) VALUES
(1, 'Panqueques', 'Esponjosos con un tono dorado y tentador.', 11, 'postres', 'disponible', 'panq.jpg'),
(2, 'Jugo de naranja', 'Lleno de vitamina C y el sabor de naranjas maduras, este jugo es perfecto para revitalizarte en cualquier momento del día.', 8, 'jugos', 'disponible', 'naraj.jpg'),
(3, 'Batido de Fresa: Elixir de Frescura y Dulzura', 'Las fresas, con su sabor dulce y jugoso, son la estrella de esta mezcla irresistible. Cada sorbo está cargado de antioxidantes y un toque de vitalidad natural.', 9, 'jugos', 'no disponible', '1699640658_04 (1).jpg'),
(4, 'Surtido de Kiwi: Frescura Verde Intensa', 'El kiwi, con su sabor dulce y ligeramente ácido, se combina de manera perfecta en esta mezcla única. Cada sorbo está repleto de antioxidantes y vitamina C, lo que lo convierte en una opción saludable y deliciosa para revitalizarte.', 8, 'jugos', 'disponible', '1699641597_02 (1).jpg'),
(5, 'Jugo de Sandía: Frescura Veraniega', 'La sandía, con su dulzura jugosa y su sabor inconfundible, se convierte en la estrella de esta deliciosa mezcla. Lleno de hidratación y sabor natural, este jugo es la elección perfecta para saciar tu sed y disfrutar de un toque veraniego en cualquier estación del año.', 12, 'jugos', 'disponible', '1699641647_03 (1).jpg'),
(6, 'Jugo de Coco: Un Abrazo Tropical en un Vaso', 'El coco, con su sabor exótico y cremoso, es la estrella de esta mezcla reconfortante. Experimenta la indulgencia tropical y la frescura en cada trago. Rico en sabor y lleno de nutrientes, este jugo es una opción saludable y deliciosa para escapar de la rutina diaria.', 9, 'jugos', 'disponible', '1699641787_05 (1).jpg'),
(7, 'Surtido Oreo: La Tentación Crujiente y Dulce', 'Esta fusión crea una delicia crujiente y dulce que satisfará tus antojos más golosos. Cada sorbo es una experiencia única, con el equilibrio perfecto entre el sabor a chocolate de las galletas Oreo y la cremosidad de nuestro batido.', 10, 'jugos', 'disponible', '1699641829_06 (1).jpg'),
(8, 'Jugo de Mora: El Elixir de la Elegancia Frutal', 'Las moras, con su sabor agridulce y su color profundo, son las protagonistas de esta mezcla refinada. Cargado de antioxidantes y un toque de misterio, este jugo es la elección perfecta para aquellos que buscan una experiencia frutal única.', 12, 'jugos', 'disponible', '1699641889_07 (1).jpg'),
(9, 'Jugo de Plátanos: Energía Natural en Cada Sorbo', 'Los plátanos, con su dulzura natural y textura cremosa, son la estrella de esta mezcla reconfortante. Cargados de potasio y nutrientes esenciales, estos jugos son una opción saludable y deliciosa para recargar tus energías. Experimenta la suavidad y el sabor auténtico de los plátanos en su máximo esplendor.', 16, 'jugos', 'disponible', '1699641935_08 (1).jpg'),
(10, 'Helado de Vainilla con Caramelo', 'Es el postre perfecto para aquellos que buscan una experiencia clásica y reconfortante. Ya sea como un capricho individual o para compartir, este helado es una deliciosa indulgencia que te hará sentir como un niño otra vez.', 12, 'postres', 'disponible', '1699642664_01 (1).jpg'),
(11, 'Macarons', 'Estas delicadas galletas francesas se caracterizan por su exterior crujiente y su interior suave y relleno. Disponibles en una variedad de sabores exquisitos, desde el clásico chocolate y vainilla hasta los más atrevidos como frambuesa y pistacho, cada Macaron es una explosión de sabor en cada bocado. Perfectos para acompañar tu bebida favorita o como un regalo especial para tu paladar, nuestros Macarons son la elección ideal para aquellos que buscan un postre sofisticado y delicioso.', 5, 'postres', 'disponible', '1699642687_02 (2).jpg'),
(12, 'Donas', 'Desde las clásicas donas glaseadas hasta las rellenas con sabores tentadores, nuestro surtido de donas ofrece algo para satisfacer todos los antojos. Sumérgete en el mundo de la textura suave y los sabores variados que nuestras donas tienen para ofrecer. Perfectas para acompañar tu café o para disfrutar como un capricho por sí solas, nuestras donas son una verdadera tentación para el amante de los postres.', 7, 'postres', 'no disponible', '1699642721_03 (2).jpg'),
(13, 'Pie de manzana', 'Nuestro Pie de Manzana es una obra maestra de la repostería que te transportará a la nostalgia de los sabores caseros y reconfortantes. Con una masa dorada y crujiente que abraza un relleno generoso de manzanas frescas y especias aromáticas, cada bocado es una experiencia que despierta tus sentidos. La mezcla perfecta de dulzura y un toque de acidez de las manzanas se combina en una armonía de sabores que te hará sentir como en casa.', 15, 'postres', 'disponible', '1699642760_06 (2).jpg'),
(14, 'Pie de café', 'Nuestro Pie de Café es un tributo a los amantes del café y los postres. Este irresistible pastel combina la riqueza del café recién hecho con la indulgencia de una masa suave y crujiente. Cada bocado es una experiencia única, donde el sabor tostado y vigorizante del café se encuentra con la dulzura reconfortante de nuestro relleno.', 15, 'postres', 'disponible', '1699642782_04 (2).jpg'),
(15, 'Brownies de Chocolate', 'Nuestros Brownies de Chocolate son una oda a la indulgencia y al amor por el cacao. Cada mordisco es una experiencia profunda y satisfactoria que te transportará al mundo del chocolate en su máxima expresión. Con una textura densa y un sabor a chocolate rico y aterciopelado, estos brownies son el epítome de la decadencia.', 10, 'postres', 'disponible', '1699642812_08 (2).jpg'),
(16, 'Pan con pollo', 'Cada bocado es un viaje gastronómico que te lleva a una experiencia satisfactoria y deliciosa. El pollo, sazonado y cocido a la perfección, se encuentra entre dos rebanadas de pan fresco y esponjoso. Acompañado de ingredientes frescos y salsas sabrosas, este bocadillo es una elección reconfortante que te llena de energía.', 10, 'panes', 'disponible', '1699643017_01 (2).jpg'),
(17, 'Pan con Chicharrón', 'En cada bocado, encontrarás la combinación perfecta de pan fresco y crujiente con trozos de chicharrón sazonados a la perfección. El chicharrón, con su deliciosa y crujiente capa dorada, se mezcla armoniosamente con el pan, creando una experiencia de sabor única.', 13, 'panes', 'disponible', '1699643055_02 (3).jpg'),
(18, 'Pan con Mermelada', 'Nuestro Pan con Mermelada es una opción clásica y reconfortante que te brinda la simplicidad de un buen desayuno.', 8, 'panes', 'disponible', '1699643084_03 (3).jpg'),
(19, 'Croissants', 'Nuestros Croissants son pequeñas obras maestras de la repostería que te transportarán a las calles de París con cada mordisco. Cada uno de estos bocados dorados se hornea a la perfección, creando una textura hojaldrada y un sabor inigualable.', 22, 'panes', 'disponible', '1699643111_05 (2).jpg'),
(20, 'Pan Redondo', 'Nuestro Pan Redondo es una obra maestra de la panadería que te brinda la perfección en cada bocado. Este pan recién horneado, con su corteza dorada y crujiente, esconde un interior tierno y esponjoso que te hará volver por más.', 8, 'panes', 'no disponible', '1699643133_08 (3).jpg'),
(21, 'Combo Frances', 'Nuestro Combo Francés es un festín de sabores y aromas que rinden homenaje a la rica tradición culinaria de Francia. Cada elemento de este combo ha sido cuidadosamente seleccionado para ofrecerte una experiencia gastronómica excepcional.', 20, 'panes', 'disponible', '1699643156_07 (2).jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `_id` int(1) DEFAULT NULL,
  `nombre` varchar(6) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `provee` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`_id`, `nombre`, `telefono`, `correo`, `provee`) VALUES
(1, 'Marcio', 956843172, 'mGutierrez@gmail.com', 'frutas'),
(2, 'Piero', 944143232, 'pieroCt@gmail.com', 'lacteos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `_id` int(1) DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `hora` varchar(5) DEFAULT NULL,
  `total` int(2) DEFAULT NULL,
  `metodo_pago` varchar(8) DEFAULT NULL,
  `metodo_entrega` varchar(6) DEFAULT NULL,
  `nombre_cliente` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`_id`, `fecha`, `hora`, `total`, `metodo_pago`, `metodo_entrega`, `nombre_cliente`) VALUES
(1, '13/10/2023', '16:00', 22, 'tarjeta', 'envio', 'Diana'),
(2, '09/10/2023', '10:45', 8, 'efectivo', 'tienda', 'Marco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
