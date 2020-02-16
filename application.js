var app = new Vue({
    el: '#application',
    data: {
        message: 'Hello Vue!',
        search_terms: "",
        hospitals: [{
            id: 1,
            name: "Mulago",
            departments: [{
                id: 1,
                is_opd: false,
                name: "Immunization Department",
                description: "Immunization takes place from Monday to Friday and from 8am and usually ends by 2pm",
                department_image: "---department_image---",
                illustration_image: "---illustration_image---",
                services: [{
                    id: 1,
                    name: "Poliomyelitis - OPV/IPV",
                    description: "",
                    service_image: "---service-image---",
                    price: 0
                },
                {
                    id: 1,
                    name: "Poliomyelitis - OPV/IPV",
                    description: "",
                    service_image: "---service-image---",
                    price: 0
                }
                ]
            },{
                id:67
            }]
        }, {
            id: 2,
            name: "Kirudu"
        }, {
            id: 3,
            name: "Kawempe"
        }]
    },
    methods: {
        search() {

        }
    }
})
  //0704195977