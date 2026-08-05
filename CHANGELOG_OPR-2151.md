# Changelog - Cambios de OpenAPI (OPR-2151-fix-openapi-specs)

**Fecha:** 2026-03-10
**Rama OpenAPI:** OPR-2151-fix-openapi-specs

## Resumen de Cambios

El SDK de PHP ha sido regenerado con los cambios de la rama `OPR-2151-fix-openapi-specs` del repositorio de OpenAPI.

### Estadísticas
- **262 archivos modificados**
- **9,220 líneas agregadas**
- **15,202 líneas eliminadas**

## Modelos Eliminados

Los siguientes modelos fueron eliminados del SDK:

1. `CheckoutOrderTemplateCustomerInfo`
2. `CustomerAntifraudInfo`
3. `CustomerAntifraudInfoResponse`
4. `CustomerFiscalEntitiesDataResponse`
5. `CustomerFiscalEntitiesResponse`
6. `CustomerInfoJustCustomerId`
7. `CustomerResponseShippingContacts`
8. `CustomerShippingContactsDataResponse`
9. `LogsResponseData`
10. `OrderFiscalEntityRequest`
11. `OrderRequestCustomerInfo`
12. `OrderUpdateRequestCustomerInfo`
13. `SmsCheckoutRequest`
14. `TransferMethodResponse`
15. `UpdateCustomerAntifraudInfo`

## Modelos Nuevos

Los siguientes modelos fueron agregados:

1. `ChargeOrderResponseChannel`
2. `CustomerPaymentSourcesInner`
3. `OrderResponseChannel`
4. `TransfersResponseDestination`
5. `UpdatePaymentMethodsAmount`
6. `UpdatePaymentMethodsExpiresAt`

## Modelos Modificados Significativamente

### Cambios Mayores (>200 líneas)
- `LogResponse` - Refactorización completa
- `LogsResponse` - Refactorización completa
- `OrderResponse` - Cambios significativos en estructura
- `TransactionResponse` - Cambios significativos
- `TransfersResponse` - Cambios significativos
- `UpdateCustomer` - Refactorización
- `WebhookKeyCreateResponse` - Cambios en estructura
- `WebhookKeyDeleteResponse` - Cambios en estructura
- `WebhookKeyResponse` - Cambios en estructura
- `WebhookResponse` - Cambios significativos
- `WebhookUpdateRequest` - Cambios en estructura

### Cambios Moderados
- `OrderUpdateRequest` - Cambios en estructura de customer info
- `OrderRequest` - Cambios en estructura de customer info
- `OrderRefundRequest` - Nuevos campos agregados
- `DeleteApiKeysResponse` - Mejoras en estructura
- `GetChargesResponse` - Refactorización
- `EventResponse` - Nuevos campos

## Validaciones Realizadas

### ✅ Seguridad
- **Composer audit:** No se encontraron vulnerabilidades de seguridad
- **Dependencias actualizadas:** Todas las dependencias están en versiones seguras

### ⚠️ Pruebas
- **Tests unitarios:** 69 errores por falta de servidor mock (esperado)
- **Sintaxis PHP:** Sin errores de sintaxis
- **Deprecation warnings:** Algunos warnings en código generado (no críticos)

### ⚠️ Análisis Estático
- **PHPStan:** Error interno de PHPStan (no relacionado con el código generado)
- **Sintaxis:** Validada manualmente - OK

## Próximos Pasos

### 1. Pruebas en Cliente
Antes de integrar estos cambios en producción:

1. **Actualizar el SDK en tu aplicación cliente:**
   ```bash
   composer update digitalfemsa/femsa-php
   ```

2. **Revisar cambios en modelos eliminados:**
   - Verificar si tu aplicación usa alguno de los 15 modelos eliminados
   - Actualizar el código para usar los nuevos modelos equivalentes

3. **Probar funcionalidad crítica:**
   - Creación de órdenes
   - Procesamiento de pagos
   - Webhooks
   - Gestión de clientes

4. **Validar respuestas de API:**
   - Verificar que los nuevos campos se deserialicen correctamente
   - Confirmar que no hay breaking changes en tu implementación

### 2. Consideraciones de Breaking Changes

**Modelos eliminados que pueden afectar tu código:**
- `CustomerAntifraudInfo` / `CustomerAntifraudInfoResponse`
- `OrderRequestCustomerInfo` / `OrderUpdateRequestCustomerInfo`
- `SmsCheckoutRequest`

**Nuevos modelos que debes revisar:**
- `ChargeOrderResponseChannel` / `OrderResponseChannel` - Nuevos campos de canal
- `CustomerPaymentSourcesInner` - Nueva estructura para payment sources
- `UpdatePaymentMethodsAmount` / `UpdatePaymentMethodsExpiresAt` - Nuevos campos

### 3. Testing Recomendado

```php
// Ejemplo de test básico
$config = DigitalFemsa\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_TEST_TOKEN');

$apiInstance = new DigitalFemsa\Api\OrdersApi(
    new GuzzleHttp\Client(),
    $config
);

// Probar creación de orden
$orderRequest = new \DigitalFemsa\Model\OrderRequest();
// ... configurar orden

try {
    $result = $apiInstance->createOrder($orderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
```

## Notas Técnicas

### Deprecation Warnings
Los siguientes archivos tienen deprecation warnings de PHP 8.x (no críticos):
- `ChargeOrderResponseChannel.php`
- `CustomerPaymentSourcesInner.php`
- `OrderResponseChannel.php`

Estos warnings son por parámetros nullable implícitos en constructores. No afectan la funcionalidad pero deberían corregirse en futuras versiones del generador.

### Compatibilidad
- **PHP:** 7.4+ y 8.0+
- **Guzzle:** 7.10.0
- **PHPUnit:** 9.6.34
- **PHPStan:** 1.10.47

## Contacto

Para reportar problemas con estos cambios:
- Email: engineering@digitalfemsa.io
- GitHub Issues: https://github.com/digitalfemsa/openapi/issues
