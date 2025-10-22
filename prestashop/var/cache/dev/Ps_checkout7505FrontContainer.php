<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class Ps_checkout7505FrontContainer extends Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->services = [];
        $this->normalizedIds = [
            'monolog\\handler\\handlerinterface' => 'Monolog\\Handler\\HandlerInterface',
            'prestashop\\modulelibcachedirectoryprovider\\cache\\cachedirectoryprovider' => 'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider',
            'prestashop\\psaccountsinstaller\\installer\\facade\\psaccounts' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts',
            'prestashop\\psaccountsinstaller\\installer\\installer' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Installer',
            'pscheckout\\api\\http\\checkouthttpclient' => 'PsCheckout\\Api\\Http\\CheckoutHttpClient',
            'pscheckout\\api\\http\\configuration\\checkoutclientconfigurationbuilder' => 'PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder',
            'pscheckout\\api\\http\\configuration\\orderhttpclientconfigurationbuilder' => 'PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder',
            'pscheckout\\api\\http\\configuration\\ordershipmenttrackingconfigurationbuilder' => 'PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder',
            'pscheckout\\api\\http\\orderhttpclient' => 'PsCheckout\\Api\\Http\\OrderHttpClient',
            'pscheckout\\api\\http\\ordershipmenttrackinghttpclient' => 'PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient',
            'pscheckout\\cache\\array\\paypalorder' => 'PsCheckout\\Cache\\Array\\PayPalOrder',
            'pscheckout\\cache\\array\\shippingtracking' => 'PsCheckout\\Cache\\Array\\ShippingTracking',
            'pscheckout\\cache\\filesystem\\paypalorder' => 'PsCheckout\\Cache\\FileSystem\\PayPalOrder',
            'pscheckout\\cache\\filesystem\\shippingtracking' => 'PsCheckout\\Cache\\FileSystem\\ShippingTracking',
            'pscheckout\\core\\customer\\action\\expresscheckoutaction' => 'PsCheckout\\Core\\Customer\\Action\\ExpressCheckoutAction',
            'pscheckout\\core\\fundingsource\\factory\\fundingsourcetokenfactory' => 'PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory',
            'pscheckout\\core\\order\\action\\createorderaction' => 'PsCheckout\\Core\\Order\\Action\\CreateOrderAction',
            'pscheckout\\core\\order\\action\\createorderpaymentaction' => 'PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction',
            'pscheckout\\core\\order\\action\\createvalidateorderdataaction' => 'PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction',
            'pscheckout\\core\\order\\action\\validateorderaction' => 'PsCheckout\\Core\\Order\\Action\\ValidateOrderAction',
            'pscheckout\\core\\order\\builder\\node\\amountbreakdownnode' => 'PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode',
            'pscheckout\\core\\order\\builder\\node\\applicationcontextnodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\basenodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\cardpaymentsourcenodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\googlepaypaymentsourcenodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\payernodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\paypalpaymentsourcenodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\shippingnodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\supplementarydatanodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder',
            'pscheckout\\core\\order\\builder\\orderpayloadbuilder' => 'PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder',
            'pscheckout\\core\\order\\exception\\handler\\ordercreationexceptionhandler' => 'PsCheckout\\Core\\Order\\Exception\\Handler\\OrderCreationExceptionHandler',
            'pscheckout\\core\\order\\processor\\createorderprocessor' => 'PsCheckout\\Core\\Order\\Processor\\CreateOrderProcessor',
            'pscheckout\\core\\order\\validator\\checkoutvalidator' => 'PsCheckout\\Core\\Order\\Validator\\CheckoutValidator',
            'pscheckout\\core\\order\\validator\\orderamountvalidator' => 'PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator',
            'pscheckout\\core\\order\\validator\\orderauthorizationvalidator' => 'PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator',
            'pscheckout\\core\\orderstate\\action\\changeorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setcompletedorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setdeclinedorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setpendingorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setrefundedorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setreversedorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction',
            'pscheckout\\core\\orderstate\\service\\orderstatemapper' => 'PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper',
            'pscheckout\\core\\paymenttoken\\action\\deletepaymenttokenaction' => 'PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction',
            'pscheckout\\core\\paymenttoken\\action\\savepaymenttokenaction' => 'PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction',
            'pscheckout\\core\\paypal\\applepay\\builder\\applepaypaymentrequestdatabuilder' => 'PsCheckout\\Core\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestDataBuilder',
            'pscheckout\\core\\paypal\\card3dsecure\\card3dsecurevalidator' => 'PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator',
            'pscheckout\\core\\paypal\\googlepay\\builder\\googlepaypaymentrequestdatabuilder' => 'PsCheckout\\Core\\PayPal\\GooglePay\\Builder\\GooglePayPaymentRequestDataBuilder',
            'pscheckout\\core\\paypal\\oauth\\oauthservice' => 'PsCheckout\\Core\\PayPal\\OAuth\\OAuthService',
            'pscheckout\\core\\paypal\\order\\action\\cancelpaypalorderaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\CancelPayPalOrderAction',
            'pscheckout\\core\\paypal\\order\\action\\capturepaypalorderaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction',
            'pscheckout\\core\\paypal\\order\\action\\createpaypalorderaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\CreatePayPalOrderAction',
            'pscheckout\\core\\paypal\\order\\action\\refundpaypalorderaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\RefundPayPalOrderAction',
            'pscheckout\\core\\paypal\\order\\action\\updatepaypalorderpurchaseunitaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction',
            'pscheckout\\core\\paypal\\order\\cache\\paypalordercache' => 'PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache',
            'pscheckout\\core\\paypal\\order\\handler\\orderapprovalreversedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\orderapprovedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\ordercompletedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentcompletedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentdeniedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentpendingeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentrefundedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentreversedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paypaleventdispatcher' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PayPalEventDispatcher',
            'pscheckout\\core\\paypal\\order\\processor\\createpaypalorderprocessor' => 'PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor',
            'pscheckout\\core\\paypal\\order\\processor\\updateexternalpaypalorderprocessor' => 'PsCheckout\\Core\\PayPal\\Order\\Processor\\UpdateExternalPayPalOrderProcessor',
            'pscheckout\\core\\paypal\\order\\provider\\paypalorderprovider' => 'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider',
            'pscheckout\\core\\paypal\\order\\provider\\paypalordertranslationprovider' => 'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider',
            'pscheckout\\core\\paypal\\order\\validator\\createdpaypalordervalidator' => 'PsCheckout\\Core\\PayPal\\Order\\Validator\\CreatedPayPalOrderValidator',
            'pscheckout\\core\\paypal\\orderstatus\\action\\paypalcheckorderstatusaction' => 'PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction',
            'pscheckout\\core\\paypal\\refund\\provider\\paypalrefundorderprovider' => 'PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider',
            'pscheckout\\core\\paypal\\shippingtracking\\action\\addtrackingaction' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingAction',
            'pscheckout\\core\\paypal\\shippingtracking\\action\\addtrackingactioninterface' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface',
            'pscheckout\\core\\paypal\\shippingtracking\\action\\processexternalshipmentaction' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\ProcessExternalShipmentAction',
            'pscheckout\\core\\paypal\\shippingtracking\\builder\\node\\trackingbasenodebuilder' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder',
            'pscheckout\\core\\paypal\\shippingtracking\\builder\\node\\trackingcarriermodulenodebuilder' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder',
            'pscheckout\\core\\paypal\\shippingtracking\\builder\\node\\trackingitemsnodebuilder' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder',
            'pscheckout\\core\\paypal\\shippingtracking\\builder\\trackingpayloadbuilder' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder',
            'pscheckout\\core\\paypal\\shippingtracking\\cache\\shippingtrackingcache' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache',
            'pscheckout\\core\\paypal\\shippingtracking\\processor\\externalshipmentprocessor' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor',
            'pscheckout\\core\\paypal\\shippingtracking\\processor\\shipmentprocessor' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor',
            'pscheckout\\core\\paypal\\shippingtracking\\processor\\shipmentprocessorinterface' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface',
            'pscheckout\\core\\paypal\\shippingtracking\\service\\trackingapiservice' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService',
            'pscheckout\\core\\paypal\\shippingtracking\\service\\trackingdatabasehandler' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler',
            'pscheckout\\core\\paypal\\shippingtracking\\validator\\ordertrackervalidator' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator',
            'pscheckout\\core\\settings\\configuration\\paypalconfiguration' => 'PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration',
            'pscheckout\\core\\settings\\configuration\\paypalsdkconfiguration' => 'PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration',
            'pscheckout\\core\\webhook\\handler\\webhookeventconfigurationupdatedhandler' => 'PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler',
            'pscheckout\\core\\webhook\\handler\\webhookhandler' => 'PsCheckout\\Core\\Webhook\\Handler\\WebhookHandler',
            'pscheckout\\core\\webhook\\service\\webhooksecrettoken' => 'PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken',
            'pscheckout\\core\\webhookdispatcher\\action\\checkpslsignatureaction' => 'PsCheckout\\Core\\WebhookDispatcher\\Action\\CheckPSLSignatureAction',
            'pscheckout\\core\\webhookdispatcher\\provider\\webhookbodyprovider' => 'PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider',
            'pscheckout\\core\\webhookdispatcher\\provider\\webhookheaderprovider' => 'PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider',
            'pscheckout\\core\\webhookdispatcher\\validator\\bodyvaluesvalidator' => 'PsCheckout\\Core\\WebhookDispatcher\\Validator\\BodyValuesValidator',
            'pscheckout\\core\\webhookdispatcher\\validator\\headervaluesvalidator' => 'PsCheckout\\Core\\WebhookDispatcher\\Validator\\HeaderValuesValidator',
            'pscheckout\\core\\webhookdispatcher\\validator\\webhookshopidvalidator' => 'PsCheckout\\Core\\WebhookDispatcher\\Validator\\WebhookShopIdValidator',
            'pscheckout\\infrastructure\\action\\addproducttocartaction' => 'PsCheckout\\Infrastructure\\Action\\AddProductToCartAction',
            'pscheckout\\infrastructure\\action\\createorupdateaddressaction' => 'PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction',
            'pscheckout\\infrastructure\\action\\customerauthenticationaction' => 'PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction',
            'pscheckout\\infrastructure\\action\\customernotifyaction' => 'PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction',
            'pscheckout\\infrastructure\\adapter\\address' => 'PsCheckout\\Infrastructure\\Adapter\\Address',
            'pscheckout\\infrastructure\\adapter\\cart' => 'PsCheckout\\Infrastructure\\Adapter\\Cart',
            'pscheckout\\infrastructure\\adapter\\configuration' => 'PsCheckout\\Infrastructure\\Adapter\\Configuration',
            'pscheckout\\infrastructure\\adapter\\context' => 'PsCheckout\\Infrastructure\\Adapter\\Context',
            'pscheckout\\infrastructure\\adapter\\country' => 'PsCheckout\\Infrastructure\\Adapter\\Country',
            'pscheckout\\infrastructure\\adapter\\currency' => 'PsCheckout\\Infrastructure\\Adapter\\Currency',
            'pscheckout\\infrastructure\\adapter\\customer' => 'PsCheckout\\Infrastructure\\Adapter\\Customer',
            'pscheckout\\infrastructure\\adapter\\language' => 'PsCheckout\\Infrastructure\\Adapter\\Language',
            'pscheckout\\infrastructure\\adapter\\link' => 'PsCheckout\\Infrastructure\\Adapter\\Link',
            'pscheckout\\infrastructure\\adapter\\shopcontext' => 'PsCheckout\\Infrastructure\\Adapter\\ShopContext',
            'pscheckout\\infrastructure\\adapter\\systemconfiguration' => 'PsCheckout\\Infrastructure\\Adapter\\SystemConfiguration',
            'pscheckout\\infrastructure\\adapter\\tools' => 'PsCheckout\\Infrastructure\\Adapter\\Tools',
            'pscheckout\\infrastructure\\adapter\\validate' => 'PsCheckout\\Infrastructure\\Adapter\\Validate',
            'pscheckout\\infrastructure\\environment\\env' => 'PsCheckout\\Infrastructure\\Environment\\Env',
            'pscheckout\\infrastructure\\environment\\envloader' => 'PsCheckout\\Infrastructure\\Environment\\EnvLoader',
            'pscheckout\\infrastructure\\logger\\loggerfactory' => 'PsCheckout\\Infrastructure\\Logger\\LoggerFactory',
            'pscheckout\\infrastructure\\logger\\loggerfilefinder' => 'PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder',
            'pscheckout\\infrastructure\\logger\\loggerfilereader' => 'PsCheckout\\Infrastructure\\Logger\\LoggerFileReader',
            'pscheckout\\infrastructure\\logger\\loggerhandlerfactory' => 'PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory',
            'pscheckout\\infrastructure\\repository\\addressrepository' => 'PsCheckout\\Infrastructure\\Repository\\AddressRepository',
            'pscheckout\\infrastructure\\repository\\cartrepository' => 'PsCheckout\\Infrastructure\\Repository\\CartRepository',
            'pscheckout\\infrastructure\\repository\\configurationrepository' => 'PsCheckout\\Infrastructure\\Repository\\ConfigurationRepository',
            'pscheckout\\infrastructure\\repository\\countryrepository' => 'PsCheckout\\Infrastructure\\Repository\\CountryRepository',
            'pscheckout\\infrastructure\\repository\\currencyrepository' => 'PsCheckout\\Infrastructure\\Repository\\CurrencyRepository',
            'pscheckout\\infrastructure\\repository\\customerrepository' => 'PsCheckout\\Infrastructure\\Repository\\CustomerRepository',
            'pscheckout\\infrastructure\\repository\\fundingsourcerepository' => 'PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository',
            'pscheckout\\infrastructure\\repository\\genderrepository' => 'PsCheckout\\Infrastructure\\Repository\\GenderRepository',
            'pscheckout\\infrastructure\\repository\\languagerepository' => 'PsCheckout\\Infrastructure\\Repository\\LanguageRepository',
            'pscheckout\\infrastructure\\repository\\orderhistoryrepository' => 'PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository',
            'pscheckout\\infrastructure\\repository\\orderrepository' => 'PsCheckout\\Infrastructure\\Repository\\OrderRepository',
            'pscheckout\\infrastructure\\repository\\orderstaterepository' => 'PsCheckout\\Infrastructure\\Repository\\OrderStateRepository',
            'pscheckout\\infrastructure\\repository\\paymenttokenrepository' => 'PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository',
            'pscheckout\\infrastructure\\repository\\paypalcustomerrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository',
            'pscheckout\\infrastructure\\repository\\paypalorderauthorizationrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository',
            'pscheckout\\infrastructure\\repository\\paypalordercapturerepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository',
            'pscheckout\\infrastructure\\repository\\paypalordermatrixrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository',
            'pscheckout\\infrastructure\\repository\\paypalorderpurchaseunitrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository',
            'pscheckout\\infrastructure\\repository\\paypalorderrefundrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository',
            'pscheckout\\infrastructure\\repository\\paypalorderrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository',
            'pscheckout\\infrastructure\\repository\\psaccountrepository' => 'PsCheckout\\Infrastructure\\Repository\\PsAccountRepository',
            'pscheckout\\infrastructure\\repository\\shippingtrackingrepository' => 'PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository',
            'pscheckout\\infrastructure\\repository\\staterepository' => 'PsCheckout\\Infrastructure\\Repository\\StateRepository',
            'pscheckout\\infrastructure\\validator\\frontcontrollervalidator' => 'PsCheckout\\Infrastructure\\Validator\\FrontControllerValidator',
            'pscheckout\\infrastructure\\validator\\merchantvalidator' => 'PsCheckout\\Infrastructure\\Validator\\MerchantValidator',
            'pscheckout\\module\\presentation\\translator' => 'PsCheckout\\Module\\Presentation\\Translator',
            'pscheckout\\presentation\\presenter\\cart\\cartpresenter' => 'PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter',
            'pscheckout\\presentation\\presenter\\fundingsource\\fundingsourcepresenter' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter',
            'pscheckout\\presentation\\presenter\\fundingsource\\fundingsourcetokenpresenter' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter',
            'pscheckout\\presentation\\presenter\\fundingsource\\fundingsourcetranslationprovider' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider',
            'pscheckout\\presentation\\presenter\\fundingsource\\logopresenter' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter',
            'pscheckout\\presentation\\presenter\\ordersummary\\ordersummarypresenter' => 'PsCheckout\\Presentation\\Presenter\\OrderSummary\\OrderSummaryPresenter',
            'pscheckout\\presentation\\presenter\\settings\\front\\frontsettingspresenter' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\FrontSettingsPresenter',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\configurationmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\linkmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\mediamodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\paypalmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\translationmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\supportedcardbrandspresenter' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter',
            'pscheckout\\utility\\common\\inputstreamutility' => 'PsCheckout\\Utility\\Common\\InputStreamUtility',
            'psr\\log\\loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ];
        $this->methodMap = [
            'Monolog\\Handler\\HandlerInterface' => 'getHandlerInterfaceService',
            'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider' => 'getCacheDirectoryProviderService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstallerService',
            'PsCheckout\\Api\\Http\\CheckoutHttpClient' => 'getCheckoutHttpClientService',
            'PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder' => 'getCheckoutClientConfigurationBuilderService',
            'PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder' => 'getOrderHttpClientConfigurationBuilderService',
            'PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder' => 'getOrderShipmentTrackingConfigurationBuilderService',
            'PsCheckout\\Api\\Http\\OrderHttpClient' => 'getOrderHttpClientService',
            'PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient' => 'getOrderShipmentTrackingHttpClientService',
            'PsCheckout\\Cache\\Array\\PayPalOrder' => 'getPayPalOrderService',
            'PsCheckout\\Cache\\Array\\ShippingTracking' => 'getShippingTrackingService',
            'PsCheckout\\Cache\\FileSystem\\PayPalOrder' => 'getPayPalOrder2Service',
            'PsCheckout\\Cache\\FileSystem\\ShippingTracking' => 'getShippingTracking2Service',
            'PsCheckout\\Core\\Customer\\Action\\ExpressCheckoutAction' => 'getExpressCheckoutActionService',
            'PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory' => 'getFundingSourceTokenFactoryService',
            'PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction' => 'getChangeOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction' => 'getSetCompletedOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction' => 'getSetDeclinedOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction' => 'getSetPendingOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction' => 'getSetRefundedOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction' => 'getSetReversedOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper' => 'getOrderStateMapperService',
            'PsCheckout\\Core\\Order\\Action\\CreateOrderAction' => 'getCreateOrderActionService',
            'PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction' => 'getCreateOrderPaymentActionService',
            'PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction' => 'getCreateValidateOrderDataActionService',
            'PsCheckout\\Core\\Order\\Action\\ValidateOrderAction' => 'getValidateOrderActionService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode' => 'getAmountBreakdownNodeService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder' => 'getApplicationContextNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder' => 'getBaseNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder' => 'getCardPaymentSourceNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder' => 'getGooglePayPaymentSourceNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder' => 'getPayPalPaymentSourceNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder' => 'getPayerNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder' => 'getShippingNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder' => 'getSupplementaryDataNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder' => 'getOrderPayloadBuilderService',
            'PsCheckout\\Core\\Order\\Exception\\Handler\\OrderCreationExceptionHandler' => 'getOrderCreationExceptionHandlerService',
            'PsCheckout\\Core\\Order\\Processor\\CreateOrderProcessor' => 'getCreateOrderProcessorService',
            'PsCheckout\\Core\\Order\\Validator\\CheckoutValidator' => 'getCheckoutValidatorService',
            'PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator' => 'getOrderAmountValidatorService',
            'PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator' => 'getOrderAuthorizationValidatorService',
            'PsCheckout\\Core\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestDataBuilder' => 'getApplePayPaymentRequestDataBuilderService',
            'PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator' => 'getCard3DSecureValidatorService',
            'PsCheckout\\Core\\PayPal\\GooglePay\\Builder\\GooglePayPaymentRequestDataBuilder' => 'getGooglePayPaymentRequestDataBuilderService',
            'PsCheckout\\Core\\PayPal\\OAuth\\OAuthService' => 'getOAuthServiceService',
            'PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction' => 'getPayPalCheckOrderStatusActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\CancelPayPalOrderAction' => 'getCancelPayPalOrderActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction' => 'getCapturePayPalOrderActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\CreatePayPalOrderAction' => 'getCreatePayPalOrderActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\RefundPayPalOrderAction' => 'getRefundPayPalOrderActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction' => 'getUpdatePayPalOrderPurchaseUnitActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache' => 'getPayPalOrderCacheService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler' => 'getOrderApprovalReversedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler' => 'getOrderApprovedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler' => 'getOrderCompletedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PayPalEventDispatcher' => 'getPayPalEventDispatcherService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler' => 'getPaymentCompletedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler' => 'getPaymentDeniedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler' => 'getPaymentPendingEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler' => 'getPaymentRefundedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler' => 'getPaymentReversedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor' => 'getCreatePayPalOrderProcessorService',
            'PsCheckout\\Core\\PayPal\\Order\\Processor\\UpdateExternalPayPalOrderProcessor' => 'getUpdateExternalPayPalOrderProcessorService',
            'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider' => 'getPayPalOrderProviderService',
            'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider' => 'getPayPalOrderTranslationProviderService',
            'PsCheckout\\Core\\PayPal\\Order\\Validator\\CreatedPayPalOrderValidator' => 'getCreatedPayPalOrderValidatorService',
            'PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider' => 'getPayPalRefundOrderProviderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingAction' => 'getAddTrackingActionService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface' => 'getAddTrackingActionInterfaceService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\ProcessExternalShipmentAction' => 'getProcessExternalShipmentActionService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder' => 'getTrackingBaseNodeBuilderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder' => 'getTrackingCarrierModuleNodeBuilderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder' => 'getTrackingItemsNodeBuilderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder' => 'getTrackingPayloadBuilderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache' => 'getShippingTrackingCacheService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor' => 'getExternalShipmentProcessorService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor' => 'getShipmentProcessorService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface' => 'getShipmentProcessorInterfaceService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService' => 'getTrackingApiServiceService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler' => 'getTrackingDatabaseHandlerService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator' => 'getOrderTrackerValidatorService',
            'PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction' => 'getDeletePaymentTokenActionService',
            'PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction' => 'getSavePaymentTokenActionService',
            'PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration' => 'getPayPalConfigurationService',
            'PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration' => 'getPayPalSdkConfigurationService',
            'PsCheckout\\Core\\WebhookDispatcher\\Action\\CheckPSLSignatureAction' => 'getCheckPSLSignatureActionService',
            'PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider' => 'getWebhookBodyProviderService',
            'PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider' => 'getWebhookHeaderProviderService',
            'PsCheckout\\Core\\WebhookDispatcher\\Validator\\BodyValuesValidator' => 'getBodyValuesValidatorService',
            'PsCheckout\\Core\\WebhookDispatcher\\Validator\\HeaderValuesValidator' => 'getHeaderValuesValidatorService',
            'PsCheckout\\Core\\WebhookDispatcher\\Validator\\WebhookShopIdValidator' => 'getWebhookShopIdValidatorService',
            'PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler' => 'getWebhookEventConfigurationUpdatedHandlerService',
            'PsCheckout\\Core\\Webhook\\Handler\\WebhookHandler' => 'getWebhookHandlerService',
            'PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken' => 'getWebhookSecretTokenService',
            'PsCheckout\\Infrastructure\\Action\\AddProductToCartAction' => 'getAddProductToCartActionService',
            'PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction' => 'getCreateOrUpdateAddressActionService',
            'PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction' => 'getCustomerAuthenticationActionService',
            'PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction' => 'getCustomerNotifyActionService',
            'PsCheckout\\Infrastructure\\Adapter\\Address' => 'getAddressService',
            'PsCheckout\\Infrastructure\\Adapter\\Cart' => 'getCartService',
            'PsCheckout\\Infrastructure\\Adapter\\Configuration' => 'getConfigurationService',
            'PsCheckout\\Infrastructure\\Adapter\\Context' => 'getContextService',
            'PsCheckout\\Infrastructure\\Adapter\\Country' => 'getCountryService',
            'PsCheckout\\Infrastructure\\Adapter\\Currency' => 'getCurrencyService',
            'PsCheckout\\Infrastructure\\Adapter\\Customer' => 'getCustomerService',
            'PsCheckout\\Infrastructure\\Adapter\\Language' => 'getLanguageService',
            'PsCheckout\\Infrastructure\\Adapter\\Link' => 'getLinkService',
            'PsCheckout\\Infrastructure\\Adapter\\ShopContext' => 'getShopContextService',
            'PsCheckout\\Infrastructure\\Adapter\\SystemConfiguration' => 'getSystemConfigurationService',
            'PsCheckout\\Infrastructure\\Adapter\\Tools' => 'getToolsService',
            'PsCheckout\\Infrastructure\\Adapter\\Validate' => 'getValidateService',
            'PsCheckout\\Infrastructure\\Environment\\Env' => 'getEnvService',
            'PsCheckout\\Infrastructure\\Environment\\EnvLoader' => 'getEnvLoaderService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerFactory' => 'getLoggerFactoryService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder' => 'getLoggerFileFinderService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerFileReader' => 'getLoggerFileReaderService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory' => 'getLoggerHandlerFactoryService',
            'PsCheckout\\Infrastructure\\Repository\\AddressRepository' => 'getAddressRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CartRepository' => 'getCartRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\ConfigurationRepository' => 'getConfigurationRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CustomerRepository' => 'getCustomerRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository' => 'getFundingSourceRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\GenderRepository' => 'getGenderRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository' => 'getOrderHistoryRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\OrderRepository' => 'getOrderRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\OrderStateRepository' => 'getOrderStateRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository' => 'getPayPalCustomerRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository' => 'getPayPalOrderAuthorizationRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository' => 'getPayPalOrderCaptureRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository' => 'getPayPalOrderMatrixRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository' => 'getPayPalOrderPurchaseUnitRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository' => 'getPayPalOrderRefundRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository' => 'getPayPalOrderRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository' => 'getPaymentTokenRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PsAccountRepository' => 'getPsAccountRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository' => 'getShippingTrackingRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PsCheckout\\Infrastructure\\Validator\\FrontControllerValidator' => 'getFrontControllerValidatorService',
            'PsCheckout\\Infrastructure\\Validator\\MerchantValidator' => 'getMerchantValidatorService',
            'PsCheckout\\Module\\Presentation\\Translator' => 'getTranslatorService',
            'PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter' => 'getCartPresenterService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter' => 'getFundingSourcePresenterService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter' => 'getFundingSourceTokenPresenterService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider' => 'getFundingSourceTranslationProviderService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter' => 'getLogoPresenterService',
            'PsCheckout\\Presentation\\Presenter\\OrderSummary\\OrderSummaryPresenter' => 'getOrderSummaryPresenterService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\FrontSettingsPresenter' => 'getFrontSettingsPresenterService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule' => 'getConfigurationModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule' => 'getLinkModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule' => 'getMediaModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule' => 'getPayPalModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule' => 'getTranslationModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter' => 'getSupportedCardBrandsPresenterService',
            'PsCheckout\\Utility\\Common\\InputStreamUtility' => 'getInputStreamUtilityService',
            'Psr\\Log\\LoggerInterface' => 'getLoggerInterfaceService',
            'ps_checkout.db' => 'getPsCheckout_DbService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
        ];

        $this->aliases = [];
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'Monolog\Handler\HandlerInterface' shared service.
     *
     * @return \Monolog\Handler\HandlerInterface
     */
    protected function getHandlerInterfaceService()
    {
        return $this->services['Monolog\\Handler\\HandlerInterface'] = ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory']) ? $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory'] : $this->getLoggerHandlerFactoryService()) && false ?: '_'}->build();
    }

    /**
     * Gets the public 'PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider' shared service.
     *
     * @return \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider
     */
    protected function getCacheDirectoryProviderService()
    {
        return $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', true);
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] : ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0'))) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0');
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\CheckoutHttpClient' shared service.
     *
     * @return \PsCheckout\Api\Http\CheckoutHttpClient
     */
    protected function getCheckoutHttpClientService()
    {
        return $this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient'] = new \PsCheckout\Api\Http\CheckoutHttpClient(${($_ = isset($this->services['PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder']) ? $this->services['PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder'] : $this->getCheckoutClientConfigurationBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\Configuration\CheckoutClientConfigurationBuilder' shared service.
     *
     * @return \PsCheckout\Api\Http\Configuration\CheckoutClientConfigurationBuilder
     */
    protected function getCheckoutClientConfigurationBuilderService()
    {
        return $this->services['PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder'] = new \PsCheckout\Api\Http\Configuration\CheckoutClientConfigurationBuilder(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\Configuration\OrderHttpClientConfigurationBuilder' shared service.
     *
     * @return \PsCheckout\Api\Http\Configuration\OrderHttpClientConfigurationBuilder
     */
    protected function getOrderHttpClientConfigurationBuilderService()
    {
        return $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder'] = new \PsCheckout\Api\Http\Configuration\OrderHttpClientConfigurationBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version);
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\Configuration\OrderShipmentTrackingConfigurationBuilder' shared service.
     *
     * @return \PsCheckout\Api\Http\Configuration\OrderShipmentTrackingConfigurationBuilder
     */
    protected function getOrderShipmentTrackingConfigurationBuilderService()
    {
        return $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder'] = new \PsCheckout\Api\Http\Configuration\OrderShipmentTrackingConfigurationBuilder(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\OrderHttpClient' shared service.
     *
     * @return \PsCheckout\Api\Http\OrderHttpClient
     */
    protected function getOrderHttpClientService()
    {
        return $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] = new \PsCheckout\Api\Http\OrderHttpClient(${($_ = isset($this->services['PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder']) ? $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder'] : $this->getOrderHttpClientConfigurationBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\OrderShipmentTrackingHttpClient' shared service.
     *
     * @return \PsCheckout\Api\Http\OrderShipmentTrackingHttpClient
     */
    protected function getOrderShipmentTrackingHttpClientService()
    {
        return $this->services['PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient'] = new \PsCheckout\Api\Http\OrderShipmentTrackingHttpClient(${($_ = isset($this->services['PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder']) ? $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder'] : $this->getOrderShipmentTrackingConfigurationBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Cache\Array\PayPalOrder' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPayPalOrderService()
    {
        return $this->services['PsCheckout\\Cache\\Array\\PayPalOrder'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'PsCheckout\Cache\Array\ShippingTracking' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getShippingTrackingService()
    {
        return $this->services['PsCheckout\\Cache\\Array\\ShippingTracking'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'PsCheckout\Cache\FileSystem\PayPalOrder' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPayPalOrder2Service()
    {
        return $this->services['PsCheckout\\Cache\\FileSystem\\PayPalOrder'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('paypal-orders', 3600, ${($_ = isset($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider']) ? $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] : ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', true))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the public 'PsCheckout\Cache\FileSystem\ShippingTracking' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getShippingTracking2Service()
    {
        return $this->services['PsCheckout\\Cache\\FileSystem\\ShippingTracking'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('shipping-tracking', 3600, ${($_ = isset($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider']) ? $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] : ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', true))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the public 'PsCheckout\Core\Customer\Action\ExpressCheckoutAction' shared service.
     *
     * @return \PsCheckout\Core\Customer\Action\ExpressCheckoutAction
     */
    protected function getExpressCheckoutActionService()
    {
        return $this->services['PsCheckout\\Core\\Customer\\Action\\ExpressCheckoutAction'] = new \PsCheckout\Core\Customer\Action\ExpressCheckoutAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction']) ? $this->services['PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction'] : $this->getCustomerAuthenticationActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction']) ? $this->services['PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction'] : $this->getCreateOrUpdateAddressActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\FundingSource\Factory\FundingSourceTokenFactory' shared service.
     *
     * @return \PsCheckout\Core\FundingSource\Factory\FundingSourceTokenFactory
     */
    protected function getFundingSourceTokenFactoryService()
    {
        return $this->services['PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory'] = new \PsCheckout\Core\FundingSource\Factory\FundingSourceTokenFactory(${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter'] : $this->getLogoPresenterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\ChangeOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\ChangeOrderStateAction
     */
    protected function getChangeOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\ChangeOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderStateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderStateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderStateRepository'] = new \PsCheckout\Infrastructure\Repository\OrderStateRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository'] = new \PsCheckout\Infrastructure\Repository\OrderHistoryRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetCompletedOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetCompletedOrderStateAction
     */
    protected function getSetCompletedOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetCompletedOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator']) ? $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] : ($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] = new \PsCheckout\Core\Order\Validator\OrderAmountValidator())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetDeclinedOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetDeclinedOrderStateAction
     */
    protected function getSetDeclinedOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetDeclinedOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetPendingOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetPendingOrderStateAction
     */
    protected function getSetPendingOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetPendingOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetRefundedOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetRefundedOrderStateAction
     */
    protected function getSetRefundedOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetRefundedOrderStateAction(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider'] : $this->getPayPalRefundOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetReversedOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetReversedOrderStateAction
     */
    protected function getSetReversedOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetReversedOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Service\OrderStateMapper' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Service\OrderStateMapper
     */
    protected function getOrderStateMapperService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] = new \PsCheckout\Core\OrderState\Service\OrderStateMapper(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Action\CreateOrderAction' shared service.
     *
     * @return \PsCheckout\Core\Order\Action\CreateOrderAction
     */
    protected function getCreateOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction'] = new \PsCheckout\Core\Order\Action\CreateOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction'] : $this->getCreateValidateOrderDataActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\ValidateOrderAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\ValidateOrderAction'] : $this->getValidateOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository'] : $this->getPayPalOrderMatrixRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Action\CreateOrderPaymentAction' shared service.
     *
     * @return \PsCheckout\Core\Order\Action\CreateOrderPaymentAction
     */
    protected function getCreateOrderPaymentActionService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction'] = new \PsCheckout\Core\Order\Action\CreateOrderPaymentAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Currency']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] = new \PsCheckout\Infrastructure\Adapter\Currency())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Action\CreateValidateOrderDataAction' shared service.
     *
     * @return \PsCheckout\Core\Order\Action\CreateValidateOrderDataAction
     */
    protected function getCreateValidateOrderDataActionService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction'] = new \PsCheckout\Core\Order\Action\CreateValidateOrderDataAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CurrencyRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CurrencyRepository'] : $this->getCurrencyRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator']) ? $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] : ($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] = new \PsCheckout\Core\Order\Validator\OrderAmountValidator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Action\ValidateOrderAction' shared service.
     *
     * @return \PsCheckout\Core\Order\Action\ValidateOrderAction
     */
    protected function getValidateOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Action\\ValidateOrderAction'] = new \PsCheckout\Core\Order\Action\ValidateOrderAction(${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\AmountBreakdownNode' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\AmountBreakdownNode
     */
    protected function getAmountBreakdownNodeService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode'] = new \PsCheckout\Core\Order\Builder\Node\AmountBreakdownNode();
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\ApplicationContextNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\ApplicationContextNodeBuilder
     */
    protected function getApplicationContextNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\ApplicationContextNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\BaseNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\BaseNodeBuilder
     */
    protected function getBaseNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\BaseNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\CardPaymentSourceNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\CardPaymentSourceNodeBuilder
     */
    protected function getCardPaymentSourceNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\CardPaymentSourceNodeBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\GooglePayPaymentSourceNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\GooglePayPaymentSourceNodeBuilder
     */
    protected function getGooglePayPaymentSourceNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\GooglePayPaymentSourceNodeBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\PayPalPaymentSourceNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\PayPalPaymentSourceNodeBuilder
     */
    protected function getPayPalPaymentSourceNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\PayPalPaymentSourceNodeBuilder();
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\PayerNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\PayerNodeBuilder
     */
    protected function getPayerNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\PayerNodeBuilder(${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] = new \PsCheckout\Infrastructure\Adapter\Validate())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\ShippingNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\ShippingNodeBuilder
     */
    protected function getShippingNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\ShippingNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository'] = new \PsCheckout\Infrastructure\Repository\GenderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\SupplementaryDataNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\SupplementaryDataNodeBuilder
     */
    protected function getSupplementaryDataNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\SupplementaryDataNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\OrderPayloadBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\OrderPayloadBuilder
     */
    protected function getOrderPayloadBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] = new \PsCheckout\Core\Order\Builder\OrderPayloadBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder'] : $this->getBaseNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode'] : ($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode'] = new \PsCheckout\Core\Order\Builder\Node\AmountBreakdownNode())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder'] : $this->getShippingNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder'] : $this->getPayerNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder'] : $this->getCardPaymentSourceNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder'] : $this->getSupplementaryDataNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder'] : $this->getApplicationContextNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder'] : ($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\PayPalPaymentSourceNodeBuilder())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder'] : $this->getGooglePayPaymentSourceNodeBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Exception\Handler\OrderCreationExceptionHandler' shared service.
     *
     * @return \PsCheckout\Core\Order\Exception\Handler\OrderCreationExceptionHandler
     */
    protected function getOrderCreationExceptionHandlerService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Exception\\Handler\\OrderCreationExceptionHandler'] = new \PsCheckout\Core\Order\Exception\Handler\OrderCreationExceptionHandler(${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction']) ? $this->services['PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction'] : $this->getCustomerNotifyActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Processor\CreateOrderProcessor' shared service.
     *
     * @return \PsCheckout\Core\Order\Processor\CreateOrderProcessor
     */
    protected function getCreateOrderProcessorService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Processor\\CreateOrderProcessor'] = new \PsCheckout\Core\Order\Processor\CreateOrderProcessor(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator']) ? $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator'] : $this->getOrderAuthorizationValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction'] : $this->getCreateOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] = new \PsCheckout\Infrastructure\Repository\CartRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Validator\\CheckoutValidator']) ? $this->services['PsCheckout\\Core\\Order\\Validator\\CheckoutValidator'] : $this->getCheckoutValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction'] : $this->getCapturePayPalOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction']) ? $this->services['PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction'] : $this->getSavePaymentTokenActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction']) ? $this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction'] : $this->getDeletePaymentTokenActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Validator\CheckoutValidator' shared service.
     *
     * @return \PsCheckout\Core\Order\Validator\CheckoutValidator
     */
    protected function getCheckoutValidatorService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Validator\\CheckoutValidator'] = new \PsCheckout\Core\Order\Validator\CheckoutValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] = new \PsCheckout\Infrastructure\Repository\CartRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Validator\OrderAmountValidator' shared service.
     *
     * @return \PsCheckout\Core\Order\Validator\OrderAmountValidator
     */
    protected function getOrderAmountValidatorService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] = new \PsCheckout\Core\Order\Validator\OrderAmountValidator();
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Validator\OrderAuthorizationValidator' shared service.
     *
     * @return \PsCheckout\Core\Order\Validator\OrderAuthorizationValidator
     */
    protected function getOrderAuthorizationValidatorService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator'] = new \PsCheckout\Core\Order\Validator\OrderAuthorizationValidator(${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Customer']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] = new \PsCheckout\Infrastructure\Adapter\Customer())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Cart']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] = new \PsCheckout\Infrastructure\Adapter\Cart())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] : ($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] = new \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ApplePay\Builder\ApplePayPaymentRequestDataBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ApplePay\Builder\ApplePayPaymentRequestDataBuilder
     */
    protected function getApplePayPaymentRequestDataBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestDataBuilder'] = new \PsCheckout\Core\PayPal\ApplePay\Builder\ApplePayPaymentRequestDataBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] : $this->getOrderPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] : $this->getCartPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator
     */
    protected function getCard3DSecureValidatorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] = new \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator();
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\GooglePay\Builder\GooglePayPaymentRequestDataBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\GooglePay\Builder\GooglePayPaymentRequestDataBuilder
     */
    protected function getGooglePayPaymentRequestDataBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\GooglePay\\Builder\\GooglePayPaymentRequestDataBuilder'] = new \PsCheckout\Core\PayPal\GooglePay\Builder\GooglePayPaymentRequestDataBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] : $this->getOrderPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] : $this->getCartPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\OAuth\OAuthService' shared service.
     *
     * @return \PsCheckout\Core\PayPal\OAuth\OAuthService
     */
    protected function getOAuthServiceService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\OAuth\\OAuthService'] = new \PsCheckout\Core\PayPal\OAuth\OAuthService(${($_ = isset($this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient'] : $this->getCheckoutHttpClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction
     */
    protected function getPayPalCheckOrderStatusActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction();
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\CancelPayPalOrderAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\CancelPayPalOrderAction
     */
    protected function getCancelPayPalOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CancelPayPalOrderAction'] = new \PsCheckout\Core\PayPal\Order\Action\CancelPayPalOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\CapturePayPalOrderAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\CapturePayPalOrderAction
     */
    protected function getCapturePayPalOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction'] = new \PsCheckout\Core\PayPal\Order\Action\CapturePayPalOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler'] : $this->getOrderCompletedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler'] : $this->getPaymentPendingEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler'] : $this->getPaymentCompletedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler'] : $this->getPaymentDeniedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\CreatePayPalOrderAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\CreatePayPalOrderAction
     */
    protected function getCreatePayPalOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CreatePayPalOrderAction'] = new \PsCheckout\Core\PayPal\Order\Action\CreatePayPalOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] : $this->getOrderPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] : $this->getCartPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor'] : $this->getCreatePayPalOrderProcessorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction']) ? $this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction'] : $this->getDeletePaymentTokenActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\RefundPayPalOrderAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\RefundPayPalOrderAction
     */
    protected function getRefundPayPalOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\RefundPayPalOrderAction'] = new \PsCheckout\Core\PayPal\Order\Action\RefundPayPalOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction'] : $this->getSetRefundedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\UpdatePayPalOrderPurchaseUnitAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\UpdatePayPalOrderPurchaseUnitAction
     */
    protected function getUpdatePayPalOrderPurchaseUnitActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction'] = new \PsCheckout\Core\PayPal\Order\Action\UpdatePayPalOrderPurchaseUnitAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository'] : $this->getPayPalOrderPurchaseUnitRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository'] : $this->getPayPalOrderCaptureRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository'] : $this->getPayPalOrderAuthorizationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository'] : $this->getPayPalOrderRefundRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Cache\PayPalOrderCache' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Cache\PayPalOrderCache
     */
    protected function getPayPalOrderCacheService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] = new \PsCheckout\Core\PayPal\Order\Cache\PayPalOrderCache(${($_ = isset($this->services['PsCheckout\\Cache\\Array\\PayPalOrder']) ? $this->services['PsCheckout\\Cache\\Array\\PayPalOrder'] : ($this->services['PsCheckout\\Cache\\Array\\PayPalOrder'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Cache\\FileSystem\\PayPalOrder']) ? $this->services['PsCheckout\\Cache\\FileSystem\\PayPalOrder'] : $this->getPayPalOrder2Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction']) ? $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] : ($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\OrderApprovalReversedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\OrderApprovalReversedEventHandler
     */
    protected function getOrderApprovalReversedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\OrderApprovalReversedEventHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction']) ? $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] : ($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\OrderApprovedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\OrderApprovedEventHandler
     */
    protected function getOrderApprovedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\OrderApprovedEventHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction']) ? $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] : ($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] : ($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] = new \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction'] : $this->getCapturePayPalOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction'] : $this->getUpdatePayPalOrderPurchaseUnitActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\OrderCompletedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\OrderCompletedEventHandler
     */
    protected function getOrderCompletedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\OrderCompletedEventHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction']) ? $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] : ($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction'] : $this->getUpdatePayPalOrderPurchaseUnitActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] : ($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] = new \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PayPalEventDispatcher' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PayPalEventDispatcher
     */
    protected function getPayPalEventDispatcherService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PayPalEventDispatcher'] = new \PsCheckout\Core\PayPal\Order\Handler\PayPalEventDispatcher(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler'] : $this->getPaymentCompletedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler'] : $this->getPaymentPendingEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler'] : $this->getPaymentDeniedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler'] : $this->getPaymentRefundedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler'] : $this->getPaymentReversedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler'] : $this->getOrderApprovedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler'] : $this->getOrderCompletedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler'] : $this->getOrderApprovalReversedEventHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentCompletedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentCompletedEventHandler
     */
    protected function getPaymentCompletedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentCompletedEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction'] : $this->getCreateOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction'] : $this->getCreateOrderPaymentActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction'] : $this->getSetCompletedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentDeniedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentDeniedEventHandler
     */
    protected function getPaymentDeniedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentDeniedEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction'] : $this->getSetDeclinedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentPendingEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentPendingEventHandler
     */
    protected function getPaymentPendingEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentPendingEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction'] : $this->getCreateOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction'] : $this->getSetPendingOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentRefundedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentRefundedEventHandler
     */
    protected function getPaymentRefundedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentRefundedEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction'] : $this->getSetRefundedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentReversedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentReversedEventHandler
     */
    protected function getPaymentReversedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentReversedEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction'] : $this->getSetReversedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Processor\CreatePayPalOrderProcessor' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Processor\CreatePayPalOrderProcessor
     */
    protected function getCreatePayPalOrderProcessorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor'] = new \PsCheckout\Core\PayPal\Order\Processor\CreatePayPalOrderProcessor(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository'] : $this->getPayPalOrderPurchaseUnitRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository'] : $this->getPayPalOrderCaptureRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository'] : $this->getPayPalOrderAuthorizationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository'] : $this->getPayPalOrderRefundRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Processor\UpdateExternalPayPalOrderProcessor' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Processor\UpdateExternalPayPalOrderProcessor
     */
    protected function getUpdateExternalPayPalOrderProcessorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Processor\\UpdateExternalPayPalOrderProcessor'] = new \PsCheckout\Core\PayPal\Order\Processor\UpdateExternalPayPalOrderProcessor(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] : $this->getCartPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] : $this->getOrderPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction'] : $this->getUpdatePayPalOrderPurchaseUnitActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Provider\PayPalOrderProvider' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Provider\PayPalOrderProvider
     */
    protected function getPayPalOrderProviderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] = new \PsCheckout\Core\PayPal\Order\Provider\PayPalOrderProvider(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Provider\PayPalOrderTranslationProvider' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Provider\PayPalOrderTranslationProvider
     */
    protected function getPayPalOrderTranslationProviderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider'] = new \PsCheckout\Core\PayPal\Order\Provider\PayPalOrderTranslationProvider(${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Validator\CreatedPayPalOrderValidator' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Validator\CreatedPayPalOrderValidator
     */
    protected function getCreatedPayPalOrderValidatorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Validator\\CreatedPayPalOrderValidator'] = new \PsCheckout\Core\PayPal\Order\Validator\CreatedPayPalOrderValidator(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Cart']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] = new \PsCheckout\Infrastructure\Adapter\Cart())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Refund\Provider\PayPalRefundOrderProvider' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Refund\Provider\PayPalRefundOrderProvider
     */
    protected function getPayPalRefundOrderProviderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider'] = new \PsCheckout\Core\PayPal\Refund\Provider\PayPalRefundOrderProvider(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction
     */
    protected function getAddTrackingActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingAction'] = new \PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor'] : $this->getShipmentProcessorService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingActionInterface' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction
     */
    protected function getAddTrackingActionInterfaceService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface'] = new \PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface'] : $this->getShipmentProcessorInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Action\ProcessExternalShipmentAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Action\ProcessExternalShipmentAction
     */
    protected function getProcessExternalShipmentActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\ProcessExternalShipmentAction'] = new \PsCheckout\Core\PayPal\ShippingTracking\Action\ProcessExternalShipmentAction(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor'] : $this->getExternalShipmentProcessorService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingBaseNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingBaseNodeBuilder
     */
    protected function getTrackingBaseNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingBaseNodeBuilder();
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingCarrierModuleNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingCarrierModuleNodeBuilder
     */
    protected function getTrackingCarrierModuleNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingCarrierModuleNodeBuilder();
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingItemsNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingItemsNodeBuilder
     */
    protected function getTrackingItemsNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingItemsNodeBuilder(${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Builder\TrackingPayloadBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Builder\TrackingPayloadBuilder
     */
    protected function getTrackingPayloadBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\TrackingPayloadBuilder(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder'] : ($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingBaseNodeBuilder())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder'] : $this->getTrackingItemsNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder'] : ($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingCarrierModuleNodeBuilder())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Cache\ShippingTrackingCache' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Cache\ShippingTrackingCache
     */
    protected function getShippingTrackingCacheService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache'] = new \PsCheckout\Core\PayPal\ShippingTracking\Cache\ShippingTrackingCache(${($_ = isset($this->services['PsCheckout\\Cache\\Array\\ShippingTracking']) ? $this->services['PsCheckout\\Cache\\Array\\ShippingTracking'] : ($this->services['PsCheckout\\Cache\\Array\\ShippingTracking'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Cache\\FileSystem\\ShippingTracking']) ? $this->services['PsCheckout\\Cache\\FileSystem\\ShippingTracking'] : $this->getShippingTracking2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Processor\ExternalShipmentProcessor' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Processor\ExternalShipmentProcessor
     */
    protected function getExternalShipmentProcessorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor'] = new \PsCheckout\Core\PayPal\ShippingTracking\Processor\ExternalShipmentProcessor(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator'] : $this->getOrderTrackerValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder'] : $this->getTrackingPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] : $this->getShippingTrackingRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache'] : $this->getShippingTrackingCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService'] : $this->getTrackingApiServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler'] : $this->getTrackingDatabaseHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface'] : $this->getAddTrackingActionInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor
     */
    protected function getShipmentProcessorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor'] = new \PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator'] : $this->getOrderTrackerValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder'] : $this->getTrackingPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] : $this->getShippingTrackingRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache'] : $this->getShippingTrackingCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService'] : $this->getTrackingApiServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler'] : $this->getTrackingDatabaseHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessorInterface' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor
     */
    protected function getShipmentProcessorInterfaceService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface'] = new \PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator'] : $this->getOrderTrackerValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder'] : $this->getTrackingPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] : $this->getShippingTrackingRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache'] : $this->getShippingTrackingCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService'] : $this->getTrackingApiServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler'] : $this->getTrackingDatabaseHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingApiService' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingApiService
     */
    protected function getTrackingApiServiceService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService'] = new \PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingApiService(${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient'] : $this->getOrderShipmentTrackingHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingDatabaseHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingDatabaseHandler
     */
    protected function getTrackingDatabaseHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler'] = new \PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingDatabaseHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] : $this->getShippingTrackingRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Validator\OrderTrackerValidator' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Validator\OrderTrackerValidator
     */
    protected function getOrderTrackerValidatorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator'] = new \PsCheckout\Core\PayPal\ShippingTracking\Validator\OrderTrackerValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository'] : $this->getPayPalOrderCaptureRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PaymentToken\Action\DeletePaymentTokenAction' shared service.
     *
     * @return \PsCheckout\Core\PaymentToken\Action\DeletePaymentTokenAction
     */
    protected function getDeletePaymentTokenActionService()
    {
        return $this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction'] = new \PsCheckout\Core\PaymentToken\Action\DeletePaymentTokenAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient'] : $this->getCheckoutHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PaymentToken\Action\SavePaymentTokenAction' shared service.
     *
     * @return \PsCheckout\Core\PaymentToken\Action\SavePaymentTokenAction
     */
    protected function getSavePaymentTokenActionService()
    {
        return $this->services['PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction'] = new \PsCheckout\Core\PaymentToken\Action\SavePaymentTokenAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Settings\Configuration\PayPalConfiguration' shared service.
     *
     * @return \PsCheckout\Core\Settings\Configuration\PayPalConfiguration
     */
    protected function getPayPalConfigurationService()
    {
        return $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] = new \PsCheckout\Core\Settings\Configuration\PayPalConfiguration(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Settings\Configuration\PayPalSdkConfiguration' shared service.
     *
     * @return \PsCheckout\Core\Settings\Configuration\PayPalSdkConfiguration
     */
    protected function getPayPalSdkConfigurationService()
    {
        return $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration'] = new \PsCheckout\Core\Settings\Configuration\PayPalSdkConfiguration(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter'] : $this->getFundingSourcePresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OAuth\\OAuthService']) ? $this->services['PsCheckout\\Core\\PayPal\\OAuth\\OAuthService'] : $this->getOAuthServiceService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Action\CheckPSLSignatureAction' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Action\CheckPSLSignatureAction
     */
    protected function getCheckPSLSignatureActionService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Action\\CheckPSLSignatureAction'] = new \PsCheckout\Core\WebhookDispatcher\Action\CheckPSLSignatureAction(${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Provider\WebhookBodyProvider' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Provider\WebhookBodyProvider
     */
    protected function getWebhookBodyProviderService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider'] = new \PsCheckout\Core\WebhookDispatcher\Provider\WebhookBodyProvider(${($_ = isset($this->services['PsCheckout\\Utility\\Common\\InputStreamUtility']) ? $this->services['PsCheckout\\Utility\\Common\\InputStreamUtility'] : ($this->services['PsCheckout\\Utility\\Common\\InputStreamUtility'] = new \PsCheckout\Utility\Common\InputStreamUtility())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Provider\WebhookHeaderProvider' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Provider\WebhookHeaderProvider
     */
    protected function getWebhookHeaderProviderService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider'] = new \PsCheckout\Core\WebhookDispatcher\Provider\WebhookHeaderProvider();
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Validator\BodyValuesValidator' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Validator\BodyValuesValidator
     */
    protected function getBodyValuesValidatorService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Validator\\BodyValuesValidator'] = new \PsCheckout\Core\WebhookDispatcher\Validator\BodyValuesValidator(${($_ = isset($this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider']) ? $this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider'] : $this->getWebhookBodyProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Validator\HeaderValuesValidator' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Validator\HeaderValuesValidator
     */
    protected function getHeaderValuesValidatorService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Validator\\HeaderValuesValidator'] = new \PsCheckout\Core\WebhookDispatcher\Validator\HeaderValuesValidator(${($_ = isset($this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider']) ? $this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider'] : ($this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider'] = new \PsCheckout\Core\WebhookDispatcher\Provider\WebhookHeaderProvider())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Validator\WebhookShopIdValidator' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Validator\WebhookShopIdValidator
     */
    protected function getWebhookShopIdValidatorService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Validator\\WebhookShopIdValidator'] = new \PsCheckout\Core\WebhookDispatcher\Validator\WebhookShopIdValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Webhook\Handler\WebhookEventConfigurationUpdatedHandler' shared service.
     *
     * @return \PsCheckout\Core\Webhook\Handler\WebhookEventConfigurationUpdatedHandler
     */
    protected function getWebhookEventConfigurationUpdatedHandlerService()
    {
        return $this->services['PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler'] = new \PsCheckout\Core\Webhook\Handler\WebhookEventConfigurationUpdatedHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Webhook\Handler\WebhookHandler' shared service.
     *
     * @return \PsCheckout\Core\Webhook\Handler\WebhookHandler
     */
    protected function getWebhookHandlerService()
    {
        return $this->services['PsCheckout\\Core\\Webhook\\Handler\\WebhookHandler'] = new \PsCheckout\Core\Webhook\Handler\WebhookHandler(${($_ = isset($this->services['PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken']) ? $this->services['PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken'] : $this->getWebhookSecretTokenService()) && false ?: '_'}, [0 => ${($_ = isset($this->services['PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler']) ? $this->services['PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler'] : $this->getWebhookEventConfigurationUpdatedHandlerService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'PsCheckout\Core\Webhook\Service\WebhookSecretToken' shared service.
     *
     * @return \PsCheckout\Core\Webhook\Service\WebhookSecretToken
     */
    protected function getWebhookSecretTokenService()
    {
        return $this->services['PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken'] = new \PsCheckout\Core\Webhook\Service\WebhookSecretToken(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Action\AddProductToCartAction' shared service.
     *
     * @return \PsCheckout\Infrastructure\Action\AddProductToCartAction
     */
    protected function getAddProductToCartActionService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Action\\AddProductToCartAction'] = new \PsCheckout\Infrastructure\Action\AddProductToCartAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Action\CreateOrUpdateAddressAction' shared service.
     *
     * @return \PsCheckout\Infrastructure\Action\CreateOrUpdateAddressAction
     */
    protected function getCreateOrUpdateAddressActionService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction'] = new \PsCheckout\Infrastructure\Action\CreateOrUpdateAddressAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Country']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Country'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Country'] = new \PsCheckout\Infrastructure\Adapter\Country())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\AddressRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\AddressRepository'] : $this->getAddressRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Action\CustomerAuthenticationAction' shared service.
     *
     * @return \PsCheckout\Infrastructure\Action\CustomerAuthenticationAction
     */
    protected function getCustomerAuthenticationActionService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction'] = new \PsCheckout\Infrastructure\Action\CustomerAuthenticationAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Customer']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] = new \PsCheckout\Infrastructure\Adapter\Customer())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Action\CustomerNotifyAction' shared service.
     *
     * @return \PsCheckout\Infrastructure\Action\CustomerNotifyAction
     */
    protected function getCustomerNotifyActionService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction'] = new \PsCheckout\Infrastructure\Action\CustomerNotifyAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Address' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Address
     */
    protected function getAddressService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Address'] = new \PsCheckout\Infrastructure\Adapter\Address();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Cart' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Cart
     */
    protected function getCartService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] = new \PsCheckout\Infrastructure\Adapter\Cart();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Configuration' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] = new \PsCheckout\Infrastructure\Adapter\Configuration(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Context' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Context
     */
    protected function getContextService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Country' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Country
     */
    protected function getCountryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Country'] = new \PsCheckout\Infrastructure\Adapter\Country();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Currency' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Currency
     */
    protected function getCurrencyService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] = new \PsCheckout\Infrastructure\Adapter\Currency();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Customer' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Customer
     */
    protected function getCustomerService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] = new \PsCheckout\Infrastructure\Adapter\Customer();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Language' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Language
     */
    protected function getLanguageService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Language'] = new \PsCheckout\Infrastructure\Adapter\Language();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Link' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Link
     */
    protected function getLinkService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] = new \PsCheckout\Infrastructure\Adapter\Link(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\ShopContext' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\ShopContext
     */
    protected function getShopContextService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\ShopContext'] = new \PsCheckout\Infrastructure\Adapter\ShopContext();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\SystemConfiguration' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\SystemConfiguration
     */
    protected function getSystemConfigurationService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\SystemConfiguration'] = new \PsCheckout\Infrastructure\Adapter\SystemConfiguration();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Tools' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Tools
     */
    protected function getToolsService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Tools'] = new \PsCheckout\Infrastructure\Adapter\Tools();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Validate' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Validate
     */
    protected function getValidateService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] = new \PsCheckout\Infrastructure\Adapter\Validate();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Environment\Env' shared service.
     *
     * @return \PsCheckout\Infrastructure\Environment\Env
     */
    protected function getEnvService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] = new \PsCheckout\Infrastructure\Environment\Env(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Environment\EnvLoader' shared service.
     *
     * @return \PsCheckout\Infrastructure\Environment\EnvLoader
     */
    protected function getEnvLoaderService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Environment\\EnvLoader'] = new \PsCheckout\Infrastructure\Environment\EnvLoader();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Logger\LoggerFactory' shared service.
     *
     * @return \PsCheckout\Infrastructure\Logger\LoggerFactory
     */
    protected function getLoggerFactoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFactory'] = new \PsCheckout\Infrastructure\Logger\LoggerFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['Monolog\\Handler\\HandlerInterface']) ? $this->services['Monolog\\Handler\\HandlerInterface'] : $this->getHandlerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Logger\LoggerFileFinder' shared service.
     *
     * @return \PsCheckout\Infrastructure\Logger\LoggerFileFinder
     */
    protected function getLoggerFileFinderService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder'] = new \PsCheckout\Infrastructure\Logger\LoggerFileFinder(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Logger\LoggerFileReader' shared service.
     *
     * @return \PsCheckout\Infrastructure\Logger\LoggerFileReader
     */
    protected function getLoggerFileReaderService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFileReader'] = new \PsCheckout\Infrastructure\Logger\LoggerFileReader(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] = new \PsCheckout\Infrastructure\Adapter\Validate())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder']) ? $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder'] : $this->getLoggerFileFinderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Logger\LoggerHandlerFactory' shared service.
     *
     * @return \PsCheckout\Infrastructure\Logger\LoggerHandlerFactory
     */
    protected function getLoggerHandlerFactoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory'] = new \PsCheckout\Infrastructure\Logger\LoggerHandlerFactory(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\AddressRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\AddressRepository
     */
    protected function getAddressRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\AddressRepository'] = new \PsCheckout\Infrastructure\Repository\AddressRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\CartRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] = new \PsCheckout\Infrastructure\Repository\CartRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\ConfigurationRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\ConfigurationRepository'] = new \PsCheckout\Infrastructure\Repository\ConfigurationRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\CountryRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] = new \PsCheckout\Infrastructure\Repository\CountryRepository(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\CurrencyRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\CurrencyRepository'] = new \PsCheckout\Infrastructure\Repository\CurrencyRepository(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\CustomerRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\CustomerRepository
     */
    protected function getCustomerRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\CustomerRepository'] = new \PsCheckout\Infrastructure\Repository\CustomerRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\FundingSourceRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\FundingSourceRepository
     */
    protected function getFundingSourceRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository'] = new \PsCheckout\Infrastructure\Repository\FundingSourceRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\GenderRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\GenderRepository
     */
    protected function getGenderRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository'] = new \PsCheckout\Infrastructure\Repository\GenderRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\LanguageRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\LanguageRepository'] = new \PsCheckout\Infrastructure\Repository\LanguageRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\OrderHistoryRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\OrderHistoryRepository
     */
    protected function getOrderHistoryRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository'] = new \PsCheckout\Infrastructure\Repository\OrderHistoryRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\OrderRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\OrderRepository
     */
    protected function getOrderRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\OrderStateRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\OrderStateRepository
     */
    protected function getOrderStateRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\OrderStateRepository'] = new \PsCheckout\Infrastructure\Repository\OrderStateRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalCustomerRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalCustomerRepository
     */
    protected function getPayPalCustomerRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalCustomerRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderAuthorizationRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderAuthorizationRepository
     */
    protected function getPayPalOrderAuthorizationRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderAuthorizationRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderCaptureRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderCaptureRepository
     */
    protected function getPayPalOrderCaptureRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderCaptureRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderMatrixRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderMatrixRepository
     */
    protected function getPayPalOrderMatrixRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderMatrixRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderPurchaseUnitRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderPurchaseUnitRepository
     */
    protected function getPayPalOrderPurchaseUnitRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderPurchaseUnitRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderRefundRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderRefundRepository
     */
    protected function getPayPalOrderRefundRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderRefundRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderRepository
     */
    protected function getPayPalOrderRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PaymentTokenRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PaymentTokenRepository
     */
    protected function getPaymentTokenRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] = new \PsCheckout\Infrastructure\Repository\PaymentTokenRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PsAccountRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PsAccountRepository
     */
    protected function getPsAccountRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] = new \PsCheckout\Infrastructure\Repository\PsAccountRepository(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\ShippingTrackingRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\ShippingTrackingRepository
     */
    protected function getShippingTrackingRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] = new \PsCheckout\Infrastructure\Repository\ShippingTrackingRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\StateRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Validator\FrontControllerValidator' shared service.
     *
     * @return \PsCheckout\Infrastructure\Validator\FrontControllerValidator
     */
    protected function getFrontControllerValidatorService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Validator\\FrontControllerValidator'] = new \PsCheckout\Infrastructure\Validator\FrontControllerValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Validator\MerchantValidator' shared service.
     *
     * @return \PsCheckout\Infrastructure\Validator\MerchantValidator
     */
    protected function getMerchantValidatorService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Validator\\MerchantValidator'] = new \PsCheckout\Infrastructure\Validator\MerchantValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Module\Presentation\Translator' shared service.
     *
     * @return \PsCheckout\Module\Presentation\Translator
     */
    protected function getTranslatorService()
    {
        return $this->services['PsCheckout\\Module\\Presentation\\Translator'] = new \PsCheckout\Module\Presentation\Translator(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Cart\CartPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Cart\CartPresenter
     */
    protected function getCartPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] = new \PsCheckout\Presentation\Presenter\Cart\CartPresenter(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Address']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Address'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Address'] = new \PsCheckout\Infrastructure\Adapter\Address())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Currency']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] = new \PsCheckout\Infrastructure\Adapter\Currency())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\LanguageRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\LanguageRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\LanguageRepository'] = new \PsCheckout\Infrastructure\Repository\LanguageRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CustomerRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\CustomerRepository'] = new \PsCheckout\Infrastructure\Repository\CustomerRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\FundingSource\FundingSourcePresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\FundingSource\FundingSourcePresenter
     */
    protected function getFundingSourcePresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter'] = new \PsCheckout\Presentation\Presenter\FundingSource\FundingSourcePresenter(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->getPathUri(), ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository'] : $this->getFundingSourceRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTokenPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTokenPresenter
     */
    protected function getFundingSourceTokenPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter'] = new \PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTokenPresenter(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory']) ? $this->services['PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory'] : $this->getFundingSourceTokenFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTranslationProvider' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTranslationProvider
     */
    protected function getFundingSourceTranslationProviderService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] = new \PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTranslationProvider(${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\FundingSource\LogoPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\FundingSource\LogoPresenter
     */
    protected function getLogoPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter'] = new \PsCheckout\Presentation\Presenter\FundingSource\LogoPresenter(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->getPathUri());
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\OrderSummary\OrderSummaryPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\OrderSummary\OrderSummaryPresenter
     */
    protected function getOrderSummaryPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\OrderSummary\\OrderSummaryPresenter'] = new \PsCheckout\Presentation\Presenter\OrderSummary\OrderSummaryPresenter(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider'] : $this->getPayPalOrderTranslationProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\FrontSettingsPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\FrontSettingsPresenter
     */
    protected function getFrontSettingsPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\FrontSettingsPresenter'] = new \PsCheckout\Presentation\Presenter\Settings\Front\FrontSettingsPresenter([0 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule'] : $this->getPayPalModuleService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule'] : $this->getConfigurationModuleService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule'] : $this->getMediaModuleService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule'] : $this->getLinkModuleService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule'] : $this->getTranslationModuleService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\ConfigurationModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\ConfigurationModule
     */
    protected function getConfigurationModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\ConfigurationModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter'] : $this->getFundingSourcePresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration'] : $this->getPayPalSdkConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\LinkModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\LinkModule
     */
    protected function getLinkModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\LinkModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Tools']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Tools'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Tools'] = new \PsCheckout\Infrastructure\Adapter\Tools())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\MediaModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\MediaModule
     */
    protected function getMediaModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\MediaModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->getPathUri());
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\PayPalModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\PayPalModule
     */
    protected function getPayPalModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\PayPalModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter'] : $this->getFundingSourcePresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter'] : $this->getFundingSourceTokenPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter'] : $this->getSupportedCardBrandsPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\TranslationModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\TranslationModule
     */
    protected function getTranslationModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\TranslationModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\SupportedCardBrandsPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\SupportedCardBrandsPresenter
     */
    protected function getSupportedCardBrandsPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter'] = new \PsCheckout\Presentation\Presenter\Settings\Front\SupportedCardBrandsPresenter(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Utility\Common\InputStreamUtility' shared service.
     *
     * @return \PsCheckout\Utility\Common\InputStreamUtility
     */
    protected function getInputStreamUtilityService()
    {
        return $this->services['PsCheckout\\Utility\\Common\\InputStreamUtility'] = new \PsCheckout\Utility\Common\InputStreamUtility();
    }

    /**
     * Gets the public 'Psr\Log\LoggerInterface' shared service.
     *
     * @return \Psr\Log\LoggerInterface
     */
    protected function getLoggerInterfaceService()
    {
        return $this->services['Psr\\Log\\LoggerInterface'] = ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFactory']) ? $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFactory'] : $this->getLoggerFactoryService()) && false ?: '_'}->build();
    }

    /**
     * Gets the public 'ps_checkout.db' shared service.
     *
     * @return \Db
     */
    protected function getPsCheckout_DbService()
    {
        return $this->services['ps_checkout.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'ps_checkout.module' shared service.
     *
     * @return \ps_checkout
     */
    protected function getPsCheckout_ModuleService()
    {
        return $this->services['ps_checkout.module'] = \Module::getInstanceByName('ps_checkout');
    }
}
