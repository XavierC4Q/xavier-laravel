<template>
  <div>
    <h1 class="font-mono text-2xl">OSRS Monsters 😎</h1>
    <p>Lets look at all the OSRS monsters, or search for a select one!</p>

    <div class="mt-6 flex flex-wrap md:flex-row flex-column"></div>
  </div>
</template>

<script>
import { defineComponent, onMounted, ref } from "vue";

export default defineComponent({
  name: "Home",
  setup() {
    const monsters = ref(null);
    const getAllMonsters = async (page) => {
      const randomPage = Math.floor(Math.random() * 100) + 1;

      const req = await axios(
        `http://127.0.0.1:8000/api/monsters?page=${page || randomPage}`
      );
      monsters.value = req.data._items;
    };

    onMounted(() => getAllMonsters());

    return { monsters };
  },
});
</script>

<style>
</style>