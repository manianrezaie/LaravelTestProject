<template>
    <div>
        <div class="row">
            <div class="col-xs-4 col-md-2" v-if="items.length > 0" v-for="item in items" :key="item.id">
                <div class="card card-small-item">
                    <div class="card-body">
                        <router-link  :to="{name: 'viewTeam', params: { id: item.id }}" class="text link">
                            <img v-bind:src="'/storage/images/teams/thumb3-' + item.image" class="img img-thumbnail"/>
                            <div class="text name">{{item.name }}</div>
                        </router-link>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['t'],
        data() {
            return {
                items: []
            }
        },
        created() {
            this.items = this.t;
        },
        updated(){
            this.items = this.t;
        },
        methods: {}
    }
</script>