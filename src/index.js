import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import React from "react"
import ReactDOM from "react-dom/client"

const person1 = new Person("Brad")
if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(
    document.querySelector("#render-react-example-here")
  )
  root.render(<ExampleReactComponent />)
}

// index.php js
function addToCart(name, price) {
  let cart = JSON.parse(localStorage.getItem("cart") || "[]")
  cart.push({ name, price, quantity: 1, type: "hosting" })
  localStorage.setItem("cart", JSON.stringify(cart))
  alert("Added to cart!")
  updateCartCount()
}

function updateCartCount() {
  const cart = JSON.parse(localStorage.getItem("cart") || "[]")
  document.querySelectorAll(".cart-count").forEach(el => {
    el.textContent = cart.length
  })
}

// Cart.php js
function cartManager() {
  return {
    cart: [],
    init() {
      this.loadCart()
    },
    loadCart() {
      this.cart = JSON.parse(localStorage.getItem("cart") || "[]")
      this.updateCartCount()
    },
    updateQuantity(index, change) {
      this.cart[index].quantity += change
      if (this.cart[index].quantity <= 0) {
        this.removeItem(index)
      } else {
        this.saveCart()
      }
    },
    removeItem(index) {
      this.cart.splice(index, 1)
      this.saveCart()
    },
    saveCart() {
      localStorage.setItem("cart", JSON.stringify(this.cart))
      this.updateCartCount()
    },
    updateCartCount() {
      document.querySelectorAll(".cart-count").forEach(el => {
        el.textContent = this.cart.length
      })
    },
    get subtotal() {
      return this.cart.reduce(
        (sum, item) => sum + item.price * item.quantity,
        0
      )
    },
    get tax() {
      return this.subtotal * 0.1
    },
    get total() {
      return this.subtotal + this.tax
    }
  }
}

// checkout.php js
function checkoutManager() {
  return {
    cart: [],
    init() {
      this.loadCart()
    },
    loadCart() {
      this.cart = JSON.parse(localStorage.getItem("cart") || "[]")
      this.updateCartCount()
    },
    updateCartCount() {
      document.querySelectorAll(".cart-count").forEach(el => {
        el.textContent = this.cart.length
      })
    },
    get subtotal() {
      return this.cart.reduce(
        (sum, item) => sum + item.price * item.quantity,
        0
      )
    },
    get tax() {
      return this.subtotal * 0.1
    },
    get total() {
      return this.subtotal + this.tax
    },
    placeOrder() {
      alert("Order placed successfully! Redirecting to dashboard...")
      localStorage.removeItem("cart")
      window.location.href = "dashboard.html"
    }
  }
}

updateCartCount()
