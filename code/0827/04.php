<?php
// 抽象工厂
interface IPerson
{
	public function getName();
}
class Teacher implements IPerson
{
	public function getName()
	{
		echo "Teacher<br>";
	}
}
class Student implements IPerson
{
	public function getName()
	{
		echo "Student<br>";
	}
}

interface IGrade
{
	public function getGradeName();
}
class GradeOne implements IGrade
{
	public function getGradeName()
	{
		echo "一年级<br>";
	}
}
class GradeTwo implements IGrade
{
	public function getGradeName()
	{
		echo "二年级<br>";
	}
}

interface IAbstructFactory
{
	public function getPerson();
	public function getGrade();
}

class GradeOneTeacherFactory implements IAbstructFactory
{
	public function getPerson()
	{
		return new Teacher;
	}

	public function getGrade()
	{
		return new GradeOne;
	}
}

class GradeTwoStudentFactory implements IAbstructFactory
{
	public function getPerson()
	{
		return new Student;
	}

	public function getGrade()
	{
		return new GradeTwo;
	}
}

$obj1 = new GradeOneTeacherFactory;
$obj1Person = $obj1->getPerson();
$obj1Grade  = $obj1->getGrade();
$obj1Person->getName();
$obj1Grade->getGradeName();

echo "==========<br>";
$obj2 = new GradeTwoStudentFactory;
$obj2Person = $obj2->getPerson();
$obj2Grade  = $obj2->getGrade();
$obj2Person->getName();
$obj2Grade->getGradeName();

