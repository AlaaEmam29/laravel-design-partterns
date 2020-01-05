# Design Patterns
```
-> typical solution fot commonly occuring  problems in software design.

-> it is not a piece of code but it is a general concept

-> the code of the same pattern may be different in two programs

-> a pattern is look like a blueprint

-> implementation is up to you

-> Creational Patterns : provide object creation mechanisms that increase felxbility and reuse of code.

-> EX: Sigleton ,Factory Method, Abstract Factory , Builder Prototype
```

## Creational Patterns 

### 1- Factory Method

```

-> Factory method is a creational design pattern which solves the problem of
   creating product objects without specifying their concrete classes.

-> The code that uses the factory method (often called the client code) doesn’t
   see a difference between the actual products returned by various subclasses.

-> Use the factory method when you do not know exact types of objects your code
   should work with.

-> For example, to add a new product type to the app, you’ll only need to create a new
   creator subclass and override the factory method in it.

-> Use the Factory Method when you want to provide users of your library or framework 
   with a way to extend its internal components.

-> Use the Factory Method when you want to save system resources by reusing existing
   objects instead of rebuilding them each time.

```

### 2- Abstract Factory

```
-> Is a creational design pattern that lets you produce families of related objects 
   without specifying their concrete classes.

-> The first thing the Abstract Factory pattern suggests is to explicitly declare
   interfaces for each distinct product of the product family (e.g., chair, sofa or
   coffee table). Then you can make all variants of products follow those interfaces. 
   for example, all chair variants can implement the Chair interface; all coffee table 
   variants can implement the CoffeeTable interface, and so on.
   
-> https://www.tutorialspoint.com/design_pattern/abstract_factory_pattern.htm  
```

### 3- Builder

```
->  is a creational design pattern that lets you construct complex
 objects step by step. The pattern allows you to produce different 
 types and representations of an objectusing the same construction code.
 
 

```


### 4- Singleton

```
-> The Singleton pattern solves two problems at the same time,
 violating the Single Responsibility Principle:
   


```
