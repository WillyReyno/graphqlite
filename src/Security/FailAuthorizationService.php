<?php


namespace TheCodingMachine\GraphQLite\Security;

/**
 * A fake authorization service with a user that has no rights
 */
class FailAuthorizationService implements AuthorizationServiceInterface
{
    /**
     * Returns true if the "current" user has access to the right "$right"
     *
     * @param string $right
     * @return bool
     */
    public function isAllowed(string $right): bool
    {
        throw SecurityNotImplementedException::createNoAuthorizationException();
    }
}
