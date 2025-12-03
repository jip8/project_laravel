<template>
  <div class="max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Lista de Produtos</h1>

    <div class="mb-6">
      <input
        v-model="searchQuery"
        type="text"
        placeholder="Buscar produtos por nome..."
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
    </div>

    <div v-if="filteredProducts.length > 0" class="space-y-4">
      <div
        v-for="product in filteredProducts"
        :key="product.id"
        class="bg-white p-4 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition-shadow"
      >
        <div class="flex justify-between items-center">
          <div>
            <h3 class="text-xl font-semibold text-gray-800">{{ product.name }}</h3>
            <p class="text-gray-600 mt-1">Quantidade: {{ product.quantity }}</p>
          </div>
          <div class="text-right">
            <p class="text-2xl font-bold text-green-600">R$ {{ product.price.toFixed(2) }}</p>
          </div>
        </div>
      </div>
    </div>

    <div v-else class="text-center py-12">
      <p class="text-gray-500 text-lg">Nenhum produto encontrado para "{{ searchQuery }}"</p>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const searchQuery = ref('');

const products = ref([
  { id: 1, name: 'Notebook Dell Inspiron', price: 3499.99, quantity: 15 },
  { id: 2, name: 'Mouse Logitech MX Master', price: 349.90, quantity: 50 },
  { id: 3, name: 'Teclado Mecânico Keychron', price: 599.00, quantity: 30 },
  { id: 4, name: 'Monitor LG UltraWide 29"', price: 1899.00, quantity: 10 },
  { id: 5, name: 'Webcam Logitech C920', price: 459.90, quantity: 25 },
  { id: 6, name: 'Headset HyperX Cloud', price: 399.00, quantity: 40 },
  { id: 7, name: 'SSD Samsung 1TB', price: 649.00, quantity: 60 },
  { id: 8, name: 'Mousepad Gamer RGB', price: 89.90, quantity: 100 },
]);

const filteredProducts = computed(() => {
  if (!searchQuery.value) {
    return products.value;
  }

  return products.value.filter(product =>
    product.name.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});
</script>
