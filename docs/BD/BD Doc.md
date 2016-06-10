rSpecAb.branch: Int especifica en que rama de la especialidad esta la habilidad
Ability.factor: float que determina por cuanto multiplicar los stats segun el level

Item.isCountable: Define si el item es contable (oro, pociones) o incontable (espadas, armaduras), y la cantidad queda definida en rInv.quantity

NPC.type: integer
	- 0 - Neutral
	- 1 - Pacifico
	- 2 - Hostil
	- 3 - City1
	- 4 - City2

NPC.isTrader: Le da la capacidad de ser un mercader al NPC
NPC.dialogue: Lista de strings que el npc puede decir aleatoriamente
Item.type: Determina que tipo de item es y quien lo puede usar
	- 0: Generico
	- 51: Guerrero
	- 52: Mago
	- 53: Picaro
	- 101: Humano
	- 102: Elfo
	- 103: Enano
	- 104: No Muerto
Class.eqItemType: Es otra tabla que va a tener que clase puede usar que tipos de items
rRaceSpec.fitness: Es un float que determina en que porcentaje es mejor o peor una raza con respecto a un arbol de habilidades
