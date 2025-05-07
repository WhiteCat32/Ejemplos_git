# Definir una lista de frutas disponibles
frutas_disponibles = ['manzana', 'banana', 'naranja', 'fresa', 'uva', 'kiwi']

# Mostrar las frutas disponibles al usuario
print("Frutas disponibles:")
for i, fruta in enumerate(frutas_disponibles, 1):
    print(f"{i}. {fruta}")

# Crear una lista para almacenar las frutas elegidas
ensalada_de_frutas = []

# Solicitar al usuario que elija frutas para su ensalada
print("\nElige las frutas que quieres agregar a tu ensalada (escribe los números separados por comas):")
opciones = input("Ejemplo: 1, 3, 5\n")

# Convertir la entrada del usuario en una lista de índices
indices_elegidos = [int(i.strip()) - 1 for i in opciones.split(',')]

# Agregar las frutas seleccionadas a la ensalada
for index in indices_elegidos:
    if 0 <= index < len(frutas_disponibles):
        ensalada_de_frutas.append(frutas_disponibles[index])
    else:
        print(f"Índice {index + 1} no válido.")

# Mostrar la ensalada final
if ensalada_de_frutas:
    print("\nTu ensalada de frutas contiene:")
    for fruta in ensalada_de_frutas:
        print(f"- {fruta}")
else:
    print("No has elegido ninguna fruta.")

