# 
classDiagram
    Category 
    Product <|-- Category
    Customer <|-- Address
    Address
    Order <|-- Item
    Order <|-- Customer
    Item <|-- Product

    class Order {
        Customer
        Item
    }

    class Item {
        Product
        quantity
    }

    class Category {
        - nome (Bebidas, Pizzas, Salgados, Doces)
        - description (texto longo )
        - image (url da imagem)
    }

    class Product {
        - name
        - Categoria
        - description
        - images 
        - price
        - available
    }

    class Customer {
        - name
        - Address
        - email
        - phone
        - photo

    }

    class Address {
        - city
        - street
    }

