<?php

// Домашнее задание к лекции 3.1 «Классы и объекты»

// 1. Распишите своё понимание инкапсуляции. Представьте, что вас спрашивают на собеседовании.

// "Инкапсуляция" заключается в том, что разработчик может решать, какие свойства, методы и классы будут открыты, а какие - скрыты.

// 2. Сформулируйте своими словами в чём плюсы объектов, а в чём минусы?

// К минусам может относиться громоздкость решения кода для решения простой задачи, а к плюсам - удобство работы в больших программах с однотипными данными (товарами/услугами, операциями и т.д.)

// 3. Опишите 5 классов и создайте по 2 объекта каждого класса — Машина, Телевизор, Шариковая ручка, Утка, Товар. Классы должны содержать свойства и методы. Все в одном файле.

class Cars
{
	public $brand = 'Lada';
	public $model;
	public $color;

	public function changeColor($color)
	{
		$this->color = $color;
	}

	public function changeModel($model)
	{
		$this->model = $model;
	}
}

$car1 = new Cars();
$car1->changeModel('1401');
$car1->changeColor('White');

echo 'Объект car1:<br>';
echo 'Марка машины: '.$car1->brand.'<br>';
echo 'Модель машины: '.$car1->model.'<br>';
echo 'Цвет машины: '.$car1->color.'<br><br>';

$car2 = new Cars();
$car2->changeModel('Malina');
$car2->changeColor('Orange');

echo 'Объект car2:<br>';
echo 'Марка машины: '.$car2->brand.'<br>';
echo 'Модель машины: '.$car2->model.'<br>';
echo 'Цвет машины: '.$car2->color.'<br><br><hr>';

class Television
{
	public $brand;
	public $model;

	public function __construct($brand, $model)
	{
		$this->brand = $brand;
		$this->model = $model;
	}
}

$tv1 = new Television('LG', '55LJ622V');

echo 'Объект tv1:<br>';
echo 'Марка телевизора: '.$tv1->brand.'<br>';
echo 'Модель телевизора: '.$tv1->model.'<br><br>';

$tv2 = new Television('Samsung', '"32" FHD Flat TV UE32J5100K Series 5');

echo 'Объект tv2:<br>';
echo 'Марка телевизора: '.$tv2->brand.'<br>';
echo 'Модель телевизора: '.$tv2->model.'<br><br><hr>';

class BallpointPen
{
	public $manufacturer;
	public $inkColor;

	public function __construct($manufacturer, $inkColor)
	{
		$this->manufacturer = $manufacturer;
		$this->inkColor = $inkColor;
	}
}

$pen1 = new BallpointPen('Attache', 'Blue');

echo 'Объект pen1:<br>';
echo 'Производитель ручки: '.$pen1->manufacturer.'<br>';
echo 'Цвет чернил: '.$pen1->inkColor.'<br><br>';

$pen2 = new BallpointPen('ErichKrause', 'Black');

echo 'Объект pen2:<br>';
echo 'Производитель ручки: '.$pen2->manufacturer.'<br>';
echo 'Цвет чернил: '.$pen2->inkColor.'<br><br><hr>';

class Duck
{
	public $species;
	public $habitat;

	public function __construct($species, $habitat)
	{
		$this->species = $species;
		$this->habitat = $habitat;
	}
}

$duck1 = new Duck('Мандаринка', 'Восточная Азия');

echo 'Объект duck1:<br>';
echo 'Вид утки: '.$duck1->species.'<br>';
echo 'Среда обитания: '.$duck1->habitat.'<br><br>';

$duck2 = new Duck('Кряква', 'Кряква широко распространена в северном полушарии');

echo 'Объект duck2:<br>';
echo 'Вид утки: '.$duck2->species.'<br>';
echo 'Среда обитания: '.$duck2->habitat.'<br><br><hr>';

class Goods
{
	public $name;
	public $category;
	public $price;

	public function __construct($name, $category, $price)
	{
		$this->name = $name;
		$this->category = $category;
		$this->price = $price;
	}

	public function newPrice($discount)
	{
		return round($this->price - ($this->price / 100 * $discount));
	}
}

$product1 = new Goods('Война и мир', 'Книги', 1500);

echo 'Объект product1:<br>';
echo 'Наименование товара: '.$product1->name.'<br>';
echo 'Категория товара: '.$product1->category.'<br>';
echo 'Цена: '.$product1->price.'<br>';
echo 'Цена со скидкой: '.$product1->newPrice(15).'<br><br>';

$product2 = new Goods('Ежедневник', 'Канцелярские принадлежности', 400);

echo 'Объект product2:<br>';
echo 'Наименование товара: '.$product2->name.'<br>';
echo 'Категория товара: '.$product2->category.'<br>';
echo 'Цена: '.$product2->price.'<br>';
echo 'Цена со скидкой: '.$product2->newPrice(5).'<br><br>';

?>
