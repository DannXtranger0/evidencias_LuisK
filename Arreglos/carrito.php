<?php
// Inicializar el carrito como un array vacío
$carrito = [];

// Bucle para interactuar con el usuario
while (true) {
    echo "1. Añadir producto\n";
    echo "2. Eliminar producto\n";
    echo "3. Ver carrito\n";
    echo "4. Salir\n";
    $opcion = readline("Elige una opción: ");

    switch ($opcion) {
        case '1':
            $nombre = readline("Introduce el nombre del producto: ");
            $precio = floatval(readline("Introduce el precio del producto: "));
            $producto = ['nombre' => $nombre, 'precio' => $precio];
            $carrito[] = $producto;
            break;
        case '2':
            $indice = intval(readline("Introduce el índice del producto a eliminar: "));
            if (isset($carrito[$indice])) {
                unset($carrito[$indice]);
            } else {
                echo "Producto no encontrado en el carrito.\n";
            }
            break;
        case '3':
            echo "Productos en el carrito:\n";
            foreach ($carrito as $indice => $producto) {
                echo "$indice: {$producto['nombre']} - {$producto['precio']} USD\n";
            }
            break;
        case '4':

            $total = 0;
            foreach ($carrito as $producto){
                echo $producto['nombre'] . "  -  " . $producto['precio'] . " USD" . "\n";
            }
            echo "\n\n";
            foreach ($carrito as $producto) {
                $total += $producto['precio'];
            }
            echo "Total de la compra: $total USD\n";
            exit;
        default:
            echo "Opción no válida. Inténtalo de nuevo.\n";
    }
}
?>
