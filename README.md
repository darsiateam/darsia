# Darsia
A Web Based MMORPG Game

El juego está ambientado en un mundo donde hay dos ciudades principales, cada una sigue a un dios diferente, esos dioses son enemigos, por ende las ciudades también lo son entre ellas.
- Ciudad 1 (Religiosa): Ciudad donde la religión y su creencia en el dios es de vital importancia, una ciudad muy adoctrinada y llena de templos sagrados, donde las costumbres, la familia y hacer lo que es correcto es la unica forma de vivir.
- Ciudad 2 (Tecnológica): Una ciudad donde su dios deja que hagan lo que quieran, los valores de familia, tradiciones, etc casi no existen, hay mucha pobreza, pero a cambio han evolucionado muchísimo en aspectos tecnológicos.

Cuando te registras podes ser un humano, elfo, enano o no-muerto, cada uno con sus ventajas y desventajas.

El juego desarrolla en mapas, los mapas son grillas donde no todos los puntos están habilitados (ver imagen debajo), uno puede moverse con las flechas o con el mouse a los puntos contiguos para recorrer el mapa.

![Ejemplo de mapa](https://dl.dropboxusercontent.com/u/105638235/mapExample.jpg)

Dentro de cada Spot (pedazo de la grilla) puede haber items tirados, npcs (buenos o malos), y otros jugadores y se puede interactuar con ellos (recoger, atacar, intercambiar, comprar)

Las peleas se deserrollan con un sistema similar a los de los juegos tipo MUD, la pelea se va relatando en el cuadro "tiempo real" donde se detallan cuanto pego cada ataque

Durante la pelea uno puede intervenir activando habilidades (Teclas Q,W,E,R,T) u objetos activables (Teclas 1,2,3) para aplicar mas daño, curarse vida, etc

Uno puede subir de nivel mediante matar otros personajes o NPCS, que dan experiencia, items aleatorios segun el nivel, y oro

El juego está inspirado en:
- Helbreath
- Reinos de Leyenda MUD (telnet rlmud.org)
- League of Legends
- Metin 2
- Skyrim

-------

# Información específica del juego

# Especialidad de Clase por Raza
## Humano
- Guerrero
	- + Ataque
	- ~ Defensa
	- - Magia de Batalla
- Mago
	- + Invocador
	- ~ Blanco
	- - Oscuro
- Picaro
	- + Artilugios
	- ~ Tirador
	- - Sigilo

## Elfo
- Guerrero
	- + Magia de Batalla
	- ~ Ataque
	- - Defensa
- Mago
	- + Blanco
	- ~ Oscuro
	- - Invocador
- Picaro
	- + Tirador
	- ~ Sigilo
	- - Artilugio

## Enano
- Guerrero
	- + Defensa
	- ~ Ataque
	- - Magia de Batalla
- Mago
	- + Invocador
	- ~ Oscuro
	- - Blanco
- Picaro
	- + Sigilo
	- ~ Artilugio
	- - Tirador
## No Muerto
- Guerrero
	- + Defensa
	- ~ Magia de Batalla
	- - Ataque
- Mago
	- + Oscuro
	- ~ Invocador
	- - Blanco
- Picaro
	- + Artilugio
	- ~ Sigilo
	- - Tirador
# Armas
Cada arma va a tener tipo fuego, agua o hielo
- ¿Ballesta?
- Daga
- Arco
- Arma de fuego
- Espada
- Martillo
- Mandoble
- Escudo
- Baculo

# Stats
## Personaje
Cada level se divide en 4 etapas, de 25% del level. Las primeras 3 te dan un punto para subir un stat, y al llegar a 100% conseguis un punto para los perks
- STR: AD - HP - HP Reg
- INT: AP - MP - MP Reg
- DEX: Chance de esquivar - Attack Speed - % Impacto Critico - Carisma

## Arma
### Normales
- AD
- AP
- Attack Speed
- Porcentaje de Tipo de arma (mientras mas tiene mas o menos le va a pegar al otro segun su armadura)
### Especiales
- Chance de critico
- Robo de vida
- Robo de mana
- Stun (normales para mandobles y martillos)
- Evenenamiento (normales para mandobles y martillos)

## Armadura
### Normales
- MR
- DR
- Peso (te saca agilidad)
- Tipo de armadura (fuego, etc.)
### Especiales
- HP Reg
- MP Reg
- Reflect
- Resistencia a (veneno, stun, fuego, agua, hielo)

## Accesorios
- Idem armadura
- Dex +
- Str +
- Int +

# Arbol de Habilidades
## Guerrero
	- Ataque
		- Espada
			- Una Mano: podes usar escudo, magia de batalla en la otra mano o nada para mayor dodge
			- Dos Manos: Aumenta velocidad de ataque y daño pero disminuye significativamente la defensa
		- Arco: Aumenta mucho chance de esquivar, disminuye defensa
		- Armas Pesadas: Aumenta mucho el daño, disminuye chance de esquivar y atkspeed
	- Defensa
		- Dodge:
			- Fisico: Aumenta chance de esquivar ataques Fisicos
			- Magico: Aumenta chance de esquivar ataques Magicos
			- Sigiloso: Aumenta chance de esquivar ataques Sigilosos
		- Escudo: Aumenta los stats de todo tipo de armadura (a la armadura no al personaje)

	- Magia de Batalla
		- Ataque: Magias que mejoran algun aspecto del ataque del personaje
		- Defensa: Magia que mejoran algun aspecto de defensa del personaje
		- Invocacion de Armas:
			- Daga: Cada arma es un perk lineal que va mejorando stats por ej daga perk 1 te da 5 ad, daga perk 2 te da 7 ad y 5% de critico 2% attackspeed
			- Arco
			- Arma de fuego
			- Espada
			- Martillo
- Mandoble
## Mago
	- Oscuro: Cada habilidad tiene dos activas una de 1 target y otra en area a medida que avanzan aumenta el daño, quemado, etc
		- Fuego
		- Agua
		- Hielo
	- Blanco
		- Sanación: curacion a vos o a un aliado, mientras mas altos mas chance de sacar algun debuf tenes (tambien hp y mp reg)
		- Bufos: un solo target
			- ataque: furia, berserker, mas ad, mas atkspeed, chance de critico,
			- defensa: dr, mr, reflect, resistencia a veneno,fuego, etc
	- Invocador: Todos perks lineales, que a cierto nivel conseguis hasta dos habilidades activas que no tegastan mana si no al monstruo
		- Angel: 1°: HPREG a los dos, 2°: HP a los dos
		- Demonio: 1°:
		- Soldado
## Picaro
	- Tirador
		- Gunner
		- Arquero
		- Lanzador
	- Sigilo
		- Ladron
		- Sigilo de Batalla
	- Artilugio
		- Trampas
		- Bombas
		- Engaño
