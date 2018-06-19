<?php

/**
 * INTRO TO SINGLE RESPONSABILITY PRINCIBLE
 */


/**
 * Simple Class
 * its provided to calculate age and Show Personal Data
 */
class Employee
{
  private $id;
  private $name;
  private $age;
  private $address;

// First Task Get Employee Id
  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {

    $this->id=$id;
  }

// Second Task calculate Employee Age


public function getAge()
{
  return date('Y') - $this->age;
}

public function setAge($age)
{

  $this->age=$age;
}



}

/**
 * لنطبق مبدا SINGLE RESPONSABILITY PRINCIBLE
 */

/**
* هذا الكلاس له وظيفة واحدة وهي عرض بيانات المستخدم فقط ليس ك الكلاس الذي فوقه له مهمتين
* وهنا لقد بدانا بتطبيق المبدا بابسط اشكاله
*/

class EmployeeData
{
  private $id;
  private $name;
  private $address;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {

    $this->id=$id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {

    $this->name=$name;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setAddress($address)
  {

    $this->address=$address;
  }


}

/**
 * هذا الكلاس له وظيفة واحدة وهي حساب العمر
 * وبهذا الشكل نكون قد طبقنا المفهوم بابسط أشكاله
 * الفكرة الرئيسية منه هي تجزئة مهام الكلاس ليسهل التعديل عليها كما ذكرنا من قبل

 */
class CalculateEmployeeAge
{
  private $age;

  public function getAge()
  {
    return date('Y') - $this->age;
  }

  public function setAge($age)
  {

    $this->age=$age;
  }
}

/*
* Web Development
* Facebook : https://www,facebook.com/development1soft
* Github : https://github.com/development1soft
* Youtube : https://www,youtube.com/c/WebDevelopmentTeam
*/





 ?>
